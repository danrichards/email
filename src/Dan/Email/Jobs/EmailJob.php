<?php

namespace Dan\Email\Jobs;

use Dan\Email\Support\History;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

abstract class EmailJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var string $theme
     */
    protected $theme;

    /**
     * @var string $layout
     */
    protected $layout;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var null
     */
    protected $subject;

    /**
     * @var null
     */
    protected $name;

    /**
     * @var array $data
     */
    protected $data;

    /**
     * @param $email
     * @param null $subject
     * @param null $name
     */
    public function __construct($email, $subject = null, $name = null)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->name = $name;
    }

    /**
     * Optionally, override this method in your email jobs or we'll extract
     * $data vars in our view.
     *
     * @return stdClass|array
     */
    protected function data()
    {
        return $this->data;
    }

    /**
     * Override this method in your Email Jobs
     *
     * @return mixed
     */
    abstract protected function view();

    /**
     * Standard way of handle email, so everything gets queued, logged, etc.
     */
    public function handle()
    {
        $this->log("Email sent.");

        Mail::send($this->view(), $this->data(), function ($m) {
            $m->to($this->email, $this->name)->subject($this->subject);
        });

        $this->persist();
    }

    /**
     * Log our email to history.
     */
    protected function persist()
    {
        $data = $this->data();
        $history = new History();
        if (array_key_exists('user', $data)) {
            $history->user_id = $data['user']->id;
            unset($data['user']);
        }
        $history->token = uniqid("em_", true);
        $history->recipient = $this->email;
        $history->name = $this->name;
        $history->subject = $this->job;
        $history->data = serialize($history);
        $history->job = get_class($this);
        $history->view= $this->view();

        $expires = config('email.expires');
        $history->expires =  $expires ? date("Y-m-d H:i:s", strtotime("-$expires day")) : null;

        $history->save();
    }

    /**
     * Import arguments to cols.
     */
    public function row()
    {
        $this->data['rows'][] = func_get_args();
    }

    public function rowSpecial($partial, $data = null)
    {
        $this->data['rows'][] = [
            'special' => true,
            'partial' => $partial,
            'data' => $data
        ];
    }
}