<?php

namespace Dan\Email\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Dan\Email\Support\History;

class EmailController extends Controller
{
    /**
     * @var History
     */
    protected $history;

    /**
     * @param History $history
     */
    function __construct(History $history)
    {
        $this->history = $history;
    }

    /**
     * Display an email on the web
     *
     * @param $emailId
     * @param $token
     *
     * @return \Illuminate\View\View
     */
    public function view($emailId, $token)
    {
        $email = $this->history->find($emailId);
        if ($email) {
            if ($token == $email->token) {
                if (date("Y-m-d") < $email->expire) {
                    return view($email->view, unserialize($email->data));
                } else {
                    die("We're sorry, that message has expired.");
                }
            } else {
                die("Bad token.");
            }
        } else {
            die("Email not found, it may have expired and been removed from our system.");
        }
    }

    public function basic()
    {
        $data = array_merge(config('email.globals'), [
            'base_url' => url(),
            'title' => 'Basic Sample',
            'online' => (object) [
                'href' => 'http://www.example.com/',
                'link' => 'View Online'
            ],
            'masthead' => (object) [
                'image' => 'banner.png',
                'href' => 'http://www.example.com/'
            ],
            'rows' => [
                (object) [
                    'heading' => 'Excerpt',
                    'content' => 'A excerpt is really just rows() with one item.'
                ]
            ],
            'unsubscribe' => (object) [
                'href' => 'http://www.example.com/',
                'link' => 'Unsubscribe'
            ]
        ]);

        return view("email::simples.sample-basic", $data);
    }

    public function normal()
    {
        $data = array_merge(config('email.globals'), [
            'base_url' => url(),
            'title' => 'Basic Sample',
            'online' => (object) [
                'href' => 'http://www.example.com/',
                'link' => 'View Online'
            ],
            'masthead' => (object) [
                'image' => 'banner.png',
                'href' => 'http://www.example.com/'
            ],
            'rows' => [
                (object) [
                    'heading' => 'Single',
                    'content' => 'You may pass an object or array of one object for a single column row. This row also
                        accepts image and href properties.'
                ],
                [
                    (object) [
                        'heading' => 'Two',
                        'content' => 'In your class that extends EmailJob, all you need to do is call row($obj1, $obj2)',
                        'image' => 'ipad.png',
                        'href' => 'http://www.example.com/',
                        'link' => 'Read more'
                    ],
                    (object) [
                        'heading' => 'Better Than One',
                        'content' => 'The method args will be popped into an array of columns.',
                        'image' => 'ipad.png',
                        'href' => 'http://www.example.com/',
                        'link' => 'Read more'
                    ]
                ],
                [
                    (object) [
                        'heading' => 'Three!',
                        'content' => 'Simples works well with three items too.',
                        'image' => 'icon1.png',
                        'href' => 'http://www.example.com/',
                        'link' => 'Read more'
                    ],
                    (object) [
                        'heading' => 'More Than Two',
                        'content' => 'See views/ simples/ layouts/ normal.blade.php',
                        'image' => 'icon2.png'
                    ],
                    (object) [
                        'heading' => 'Less Than Four',
                        'content' => 'Write your own theme that supports four or more.',
                        'image' => 'icon3.png',
                        'href' => 'http://www.example.com/',
                        'link' => 'Read more'
                    ]
                ],
                (object) [
                    'special' => true,
                    'partial' => 'email::simples.partials.special.sample',
                    'data' => (object) [
                        'image' => 'my-little-pony.jpg',
                        'heading' => "I'm Special!",
                        'blockquote' => 'I\'m sorry, I have a funny sense of humor.'
                    ]
                ]
            ],
            'unsubscribe' => (object) [
                'href' => 'http://www.example.com/',
                'link' => 'Unsubscribe'
            ]
        ]);
        return view("email::simples.layouts.normal", $data);
    }
}
