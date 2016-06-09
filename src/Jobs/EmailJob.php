<?php

namespace Dan\Email\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Dan\Email\Support\History;

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
     * @var array $data
     */
    protected $data;

    /**
     * @var bool $force
     */
    protected $force = false;

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
        $this->configuration();
        $this->data = $this->consolidation();
    }

    /**
     * Standard way of handle email, so everything gets queued, logged, etc.
     */
    public function handle()
    {
        if ($this->userAcceptsEmails() || $this->force) {
            $this->log("Sending email.");
            $record = $this->saveEmailHistory();

            /**
             * Setup the email online link last because we need to generate the id and token.
             */
            if (config('email.online')) {
                $this->data['online'] = (object) [
                    'href' => url("mail/view/{$record->id}/{$record->token}"),
                    'link' => config('email.globals.copy.viewOnline')
                ];
            } else {
                $this->data['online'] = false;
            }

            /**
             * Consolidate the record and data (so we have the id and token of the database record)
             */
            $data = array_merge($record->getAttributes(), $this->data);

            Mail::send($this->view(), $data, function ($m) {
                $m->to($this->email, $this->name)->subject($this->subject);
            });
        } else {
            $this->log("User is unsubscribed. No email will sent.", $this->email);
        }
    }

    /**
     * Where your descendants should call methods like masthead, excerpt, row, and data to setup your email.
     *
     * @return void
     */
    abstract protected function configuration();

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
     * Merge the global vars, defaults from our constructor data, and data set by configuration()
     *
     * @return array
     */
    protected function consolidation()
    {
        $data = config('email.globals');
        $data = array_merge($data, [
            'title' => $this->subject,
            'url' => url(),
            'user' => DB::table('users')->where('email', '=', $this->email)->first()
        ]);
        if (!empty($data['user'])) {
            $data['unsubscribe'] = (object) [
                'href' => url("mail/unsubscribe/{$data['user']->id}"),
                'link' => 'Unsubscribe'
            ];
        }
        return array_merge($data, $this->data);
    }

    /**
     * Log our email to history.
     *
     * @return $this
     */
    protected function saveEmailHistory()
    {
        $data = $this->data;

        $record = new History();
        if (array_key_exists('user', $data) && ! empty($data['user'])) {
            $record->user_id = DB::table('users')->where('id', '=', $data['user']->id)->value('id');
        }
        $record->token = uniqid("em_", true);
        $record->recipient = $this->email;
        $record->name = $this->name;
        $record->subject = $this->subject;
        $record->data = serialize($data);
        $record->job = get_class($this);
        $record->view = $this->view();

        $expire = config('email.expire');
        $record->expire =  $expire ? date("Y-m-d H:i:s", strtotime("+$expire day")) : null;

        $record->save();
        return $record;
    }

    /**
     * Fail-safe, if the user has un-subscribed. You should have logic so the
     * job is never booked in the first place.
     */
    protected function userAcceptsEmails()
    {
        if (! array_key_exists('user', $this->data)) {
            return true;
        }
        if (empty($this->data['user'])) {
            return true;
        }
        return $this->data['user']->subscribed;
    }

    /**
     * Set data manually
     *
     * @param $variable
     * @param $value
     */
    public function data($variable, $value)
    {
        $this->data[$variable] = $value;
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

    /**
     * Does this email transcend the subscription status?
     *
     * @param $value
     */
    public function force($value)
    {
        $this->force = $value;
    }
}