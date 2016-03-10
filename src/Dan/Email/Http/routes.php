<?php

get('mail/view/{emailId}/{token}', ['uses' => 'Dan\Email\Http\Controllers\EmailController@view']);

get('mail/view/samples/basic', ['uses' => 'Dan\Email\Http\Controllers\EmailController@basic']);

get('mail/view/samples/normal', ['uses' => 'Dan\Email\Http\Controllers\EmailController@normal']);