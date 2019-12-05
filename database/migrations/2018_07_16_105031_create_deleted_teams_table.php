<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeletedTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_teams', function (Blueprint $table) {
            $table->integer('event_id')->nullable()->unsigned();
            $table->integer('participant_id')->nullable()->unsigned();
            $table->integer('team_id')->nullable()->unsigned();
            $table->boolean('is_leader')->nullable();
            $table->string('zonal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deleted_teams');
    }
}
