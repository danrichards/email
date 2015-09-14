<?php

namespace Dan\Email\Jobs;

use Illuminate\Bus\Queueable;
use Dan\Core\Support\Loggable;

abstract class Job
{
    /*
    |--------------------------------------------------------------------------
    | Queueable Jobs
    |--------------------------------------------------------------------------
    |
    | This job base class provides a central location to place any logic that
    | is shared across all of your jobs. The trait included with the class
    | provides access to the "onQueue" and "delay" queue helper methods.
    |
    */
    use Queueable, Loggable;
}