<?php

Route::get('mail/view/{emailId}/{token}', ['uses' => 'Dan\Email\Http\Controllers\EmailController@view']);

Route::get('mail/view/samples/basic', ['uses' => 'Dan\Email\Http\Controllers\EmailController@basic']);

Route::get('mail/view/samples/normal', ['uses' => 'Dan\Email\Http\Controllers\EmailController@normal']);