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

	'theme' => 'simples'

];
