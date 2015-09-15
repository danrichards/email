<?php

get('mail/view/{emailId}/{token}', function() {
    ['uses' => 'Dan\MailStage\Http\Controllers\EmailController@emails'];
});

get('mail/view/basic', function() {
    ['uses' => 'Dan\MailStage\Http\Controllers\EmailController@basic'];
});

get('mail/view/normal', function() {
    ['uses' => 'Dan\MailStage\Http\Controllers\EmailController@normal'];
});

get('mail/view/violation', function() {
    ['uses' => 'Dan\MailStage\Http\Controllers\EmailController@violation'];
});