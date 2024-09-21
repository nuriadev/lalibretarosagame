<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredictionsTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->string('user_identifier');
            $table->integer('outfit');
            $table->integer('invitado');
            $table->integer('acustica');
            $table->integer('rosa');
            $table->integer('electrica');
            $table->integer('nueva');
            $table->integer('otro');
            $table->integer('piano');
            $table->integer('conocemos');
            $table->integer('fies');
            $table->integer('primera');
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
        Schema::dropIfExists('predictions');
    }
}
