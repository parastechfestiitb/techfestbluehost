<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cas');
        Schema::create('cas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('college')->nullable();
            $table->string('pin')->nullable();
            $table->text('address')->nullable();
            $table->string('semester')->nullable();
            $table->string('gender')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebookid')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('points')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cas');
    }
}
