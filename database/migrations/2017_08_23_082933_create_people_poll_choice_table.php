<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplePollChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_choice_room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_choice')->unsigned();
            $table->integer('id_people_poll')->unsigned();

            $table->foreign('id_choice')
                ->references('id')
                ->on('choice');
            $table->foreign('id_people_poll')
                ->references('id')
                ->on('people_poll');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_choice_room');
    }
}
