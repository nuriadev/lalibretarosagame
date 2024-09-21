<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTokenToPredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predictions', function (Blueprint $table) {
            $table->string('token')->nullable();
            $table->timestamp('token_expiry')->nullable();
        });
    }

    public function down()
    {
        Schema::table('predictions', function (Blueprint $table) {
            $table->dropColumn('token');
            $table->dropColumn('token_expiry');
        });
    }
}
