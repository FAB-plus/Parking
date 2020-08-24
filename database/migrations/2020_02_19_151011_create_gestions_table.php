<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vehicules_id')->unsigned();
            $table->foreign('vehicules_id')->references('id')->on('vehicules')->onDelete('cascade');
            $table->bigInteger('assurances_id')->unsigned();
            $table->foreign('assurances_id')->references('id')->on('assurances')->onDelete('cascade');
            $table->bigInteger('visites_id')->unsigned();
            $table->foreign('visites_id')->references('id')->on('visites')->onDelete('cascade');
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
        Schema::dropIfExists('gestions');
    }
}
