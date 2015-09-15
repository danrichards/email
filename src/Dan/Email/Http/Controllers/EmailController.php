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

    }

    public function basic()
    {
        $data = [
            'title' => 'Basic Sample',
            'rows' => (object) [
                'heading' => 'Excerpt',
                'content' => 'A excerpt is really just rows() with one item.',
                'masthead' => (object) [
                    'image' => 'image/mac.png',
                    'href' => 'http://www.example.com/'
                ]
            ]
        ];

        return view("simples/sample-basic", $data);
    }

    public function normal()
    {

        return view("simples/sample-normal", $data);
    }

    public function violation()
    {

        return view("simples/sample-violation", $data);
    }
}
