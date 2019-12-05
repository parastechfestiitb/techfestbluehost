<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('ca_uploads');
        Schema::create('ca_uploads',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('file')->nullable();
            $table->string('category')->nullable();
            $table->integer('points')->nullable();
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
//        Schema::dropIfExists('ca_uploads');
    }
}
