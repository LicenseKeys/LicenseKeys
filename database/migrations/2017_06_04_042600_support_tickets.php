<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupportTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('support_tickets', function($table){
        $table->increments('id');
        $table->integer('uid');
        $table->string('title');
        $table->string('message');
        $table->string('email');
        $table->string('level');
        $table->string('state');
        $table->timestamp('created');
        $table->timestamp('last_response')->nullable();
      });
      Schema::create('support_responses', function($table){
        $table->integer('tid');
        $table->string('message');
        $table->string('created');
      });
      Schema::create('support_statuses', function($table){
        $table->increments('id');
        $table->string('title');
        $table->string('color');
        $table->integer('sortorder');
        $table->boolean('showactive');
        $table->boolean('showawating');
        $table->boolean('autoclose');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('support_tickets');
      Schema::dropIfExists('support_responses');
      Schema::dropIfExists('support_statuses');
      
    }
}
