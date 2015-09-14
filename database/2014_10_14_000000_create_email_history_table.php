<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_history', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id', true);
            $table->integer('user_id')->nullable();
            $table->string('token', 23);
            $table->string('recipient', 50);
            $table->string('name', 255);
            $table->string('subject', 255);
            $table->mediumText('data')->nullable();
            $table->string('job', 255);
            $table->string('view', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_history');
    }
}
