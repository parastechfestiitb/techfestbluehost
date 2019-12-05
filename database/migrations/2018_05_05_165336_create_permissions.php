<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('admin_role');
        Schema::create('roles',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('table')->nullable();
            $table->string('permission')->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::create('admins',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('department')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('admin_role');
    }
}
