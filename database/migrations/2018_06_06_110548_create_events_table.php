<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('zonal')->nullable();
            $table->timestamp('registration')->nullable();
            $table->timestamp('payment')->nullable();
            $table->integer('amount')->nullable();
            $table->string('category')->nullable();
            $table->text('url')->nullable();
            $table->integer('participants')->nullable()->default(1);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
//        Schema::dropIfExists('events');
    }
}
