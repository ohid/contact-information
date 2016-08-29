<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('phone')->nullable();
            $table->string('telephone')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('batch')->nullable();
            $table->string('shift')->nullable();
            $table->string('department')->nullable();
            $table->string('current_study_inst')->nullable();
            $table->string('blood_group');
            $table->text('about_me');
            $table->text('hobby')->nullable();
            $table->text('aim_in_life')->nullable();
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
        Schema::drop('contacts');
    }
}
