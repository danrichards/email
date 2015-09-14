<?php

namespace Dan\Email\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

abstract class EmailJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

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
     * Retrieve data for the view
     *
     * @return stdClass|array
     */
    abstract protected function data();

    /**
     * Retrieve the view
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

        // database log for email
    }
}