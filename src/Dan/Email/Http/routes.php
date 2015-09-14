<?php

Route::get('mail/view/{emailId}/{token}', function() {
    ['uses' => 'Dan\MailStage\Http\Controllers\EmailController@emails'];
});