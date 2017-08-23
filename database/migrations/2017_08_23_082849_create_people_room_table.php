<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_people')->unsigned();
            $table->integer('id_room')->unsigned();

            $table->foreign('id_people')
                ->references('id')
                ->on('people');
            $table->foreign('id_room')
                ->references('id')
                ->on('room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_room');
    }
}
