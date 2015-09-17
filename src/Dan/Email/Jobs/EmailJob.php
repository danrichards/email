<?php

namespace Dan\Email\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Dan\Email\Support\History;

abstract class EmailJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var string $theme
     */
    protected $theme = 'simples';

    /**
     * @var string $layout
     */
    protected $layout = 'normal';

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
     * @var array $called Track what has been called so we may set defaults in handle()
     */
    protected $called;

    /**
     * @var Eloquent $record
     */
    protected $record;

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
        $this->data = $this->defaults();
    }

    public function defaults()
    {
        $this->data = [
            'title' => $this->subject,
            'layout' => $this->layout
        ];
        $this->data['user'] = DB::table('users')->where('email', '=', $this->email);
        if ($this->data['user']) {
            $this->data['unsubscribe'] = (object) [
                'href' => url("mail/unsubscribe/{$this->data['user']->id}")
            ];
        }
    }

    /**
     * Standard way of handle email, so everything gets queued, logged, etc.
     */
    public function handle()
    {
        $this->log("Sending email.");

        $record = $this->persist($this->data());

        if ('email.online') {
            $this->data['online'] = (object) [
                'href' => "mail/view/{$record->id}/{$record->token}",
                'link' => config('email.globals.copy.viewOnline')
            ];
        }

        Mail::send($this->view(), $dataWithDefaults, function ($m) {
            $m->to($this->email, $this->name)->subject($this->subject);
        });

        return $this;
    }

    /**
     * Log our email to history.
     *
     * @return $this
     */
    protected function persist()
    {
        $data = $this->data();
        $record = new History();
        if (array_key_exists('user', $data) && !is_null($data['user'])) {
            $record->user_id = DB::table('users')->where('id', '=', $data['user']->id)->value('id');
        }
        $record->token = uniqid("em_", true);
        $record->recipient = $this->email;
        $record->name = $this->name;
        $record->subject = $this->job;
        $record->data = serialize($data);
        $record->job = get_class($this);
        $record->view = $this->view();

        $expires = config('email.expires');
        $record->expires =  $expires ? date("Y-m-d H:i:s", strtotime("-$expires day")) : null;

        $record->save();
        return $record;
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
     * @return string
     */
    protected function view()
    {
        return 'email::simples.layouts.normal';
    }

    /**
     * @param $theme
     *
     * @return $this
     */
    protected function theme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * @param $layout
     *
     * @return $this
     */
    protected function layout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @param $href
     * @param $link
     *
     * @return $this
     */
    public function online($href, $link)
    {
        $this->data['online'] = (object) compact('href', 'link');
        return $this;
    }

    /**
     * @param $image
     * @param null $href
     *
     * @return $this
     */
    public function masthead($image, $href = null)
    {
        $this->data['masthead'] = (object) compact('image', 'href');
        return $this;
    }

    /**
     * @param null $heading
     * @param null $content
     *
     * @return $this
     */
    public function excerpt($heading = null, $content = null)
    {
        array_push($this->data['rows'], (object) compact('heading', 'content'));
        return $this;
    }

    /**
     * You may pass as many args as you like, they'll be consider the table
     * columns in your blade templates. The simples template only supports
     * up to 3 columns per row.
     *
     * Each argument should be an object or associative array as follows:
     *
     * (object) [
     *     'heading' => 'Awesome',
     *     'content' => 'Arrays converted to objects.',
     *     'image' => 'php.png',
     *     'href' => 'http://www.php.net',
     *     'link' => 'Read more'
     * ]
     *
     * @return $this
     */
    public function row()
    {
        $cols = func_get_args();
        array_walk($cols, function(&$col) {
            $col = (object) $col;
        });
        $this->data['rows'][] = $cols;
        return $this;
    }

    /**
     * @param $partial
     * @param null $data
     *
     * @return $this
     */
    public function rowSpecial($partial, $data = null)
    {
        $this->data['rows'][] = [
            'special' => true,
            'partial' => $partial,
            'data' => $data
        ];
        return $this;
    }

    /**
     * @param $href
     * @param $link
     *
     * @return $this
     */
    public function unsubscribe($href, $link)
    {
        $this->data['unsubscribe'] = (object) compact('href', 'link');
        return $this;
    }
}