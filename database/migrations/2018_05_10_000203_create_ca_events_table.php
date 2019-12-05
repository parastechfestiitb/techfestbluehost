<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ca_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('task')->nullable();
            $table->text('information')->nullable();
            $table->integer('points')->unsigned()->nullable();
            $table->text('social_links')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('ca_events');
    }
}
