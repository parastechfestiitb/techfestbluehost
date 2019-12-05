<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->text('phone')->nullable();
            $table->timestamp('dob')->nullable();
            $table->integer('pin')->nullable()->unsigned();
            $table->text('address')->nullable();
            $table->text('gender')->nullable();
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
//        Schema::dropIfExists('participants');
    }
}
