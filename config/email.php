<?php

return [

    /*
	|--------------------------------------------------------------------------
	| Online
	|--------------------------------------------------------------------------
	|
	| We may enable / disable the controller that displays email online.
	|
	*/

    'online' => true,

    /*
	|--------------------------------------------------------------------------
	| Expire (online email)
	|--------------------------------------------------------------------------
	|
	| How long (in days) until the email that is viewable online expires? You
    | may switch to false to if you wish for the online viewable content to
    | never expire.
	|
	*/

    'expire' => 30,

    /*
	|--------------------------------------------------------------------------
	| Cleanup
	|--------------------------------------------------------------------------
	|
	| How long (in days) until the schedule cleanup job purges old messages.
    | You may leave false if you wish for online viewable content to never
    | expire.
	|
	*/

    'cleanup' => false,

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | The default theme is simples, but we may swap that out if we want.
    |
    */

    'theme' => 'simples',

    /*
    |--------------------------------------------------------------------------
    | Globals
    |--------------------------------------------------------------------------
    |
    | Data that will be thrown into all of our views.
    |
    */

    'globals' => [
        'app' => 'My Awesome App',
        'img' => url('assets/media/email/'),
        'logo' => [
            'image' => 'logo.png',
            'href' => 'http://myapp.com/',
            'link' => 'Logo click here'
        ],
        'color' => [
            'href' => '#0a8cce'
        ],
        'buttons' => [
            [
                'image' => 'facebook.png',
                'href' => 'https://facebook.com/myapp/'
            ],
            [
                'image' => 'twitter.png',
                'href' => 'https://twitter.com/myapp/'
            ],
            [
                'image' => 'linkedin.png',
                'href' => 'https://linkedin.com/myapp/'
            ]
        ]
    ]

];
