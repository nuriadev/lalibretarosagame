<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_answers', function (Blueprint $table) {
            $table->id();
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

    public function down()
    {
        Schema::dropIfExists('correct_answers');
    }
}
