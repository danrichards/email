<?php

namespace Dan\Email\Support;

use Illuminate\Database\Eloquent\Model;

class History extends Model {

    protected $guarded = [];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'email_history';

}
