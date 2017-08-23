<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplePollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_poll', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_people')->unsigned();
            $table->integer('id_poll')->unsigned();

            $table->foreign('id_people')
                ->references('id')
                ->on('people');
            $table->foreign('id_poll')
                ->references('id')
                ->on('poll');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_poll');
    }
}
