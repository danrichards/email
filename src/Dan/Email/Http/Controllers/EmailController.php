<?php

namespace Dan\Email\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    function __construct()
    {

    }

    /**
     * Display an email on the web
     *
     * @param $emailId
     * @param $token
     */
    public function emails($emailId, $token)
    {
        print_r($emailId);
        dd($token);
    }

    public function basic()
    {
        $data = array_merge(config('email.globals'), [
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
//        return view("simples/sample-normal", $data);
    }

    public function violation()
    {
//        return view("simples/sample-violation", $data);
    }
}
