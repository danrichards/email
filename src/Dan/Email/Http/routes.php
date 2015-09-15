<?php

get('mail/view/{emailId}/{token}', ['uses' => 'Dan\Email\Http\Controllers\EmailController@emails']);

get('mail/view/basic', ['uses' => 'Dan\Email\Http\Controllers\EmailController@basic']);

get('mail/view/normal', ['uses' => 'Dan\Email\Http\Controllers\EmailController@normal']);

get('mail/view/violation', ['uses' => 'Dan\Email\Http\Controllers\EmailController@violation']);