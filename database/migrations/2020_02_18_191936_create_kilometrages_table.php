<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKilometragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kilometrages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kilometrage');
            $table->date('date_kilometrage');
            $table->bigInteger('vehicules_id')->unsigned();
            $table->foreign('vehicules_id')->references('id')->on('vehicules')->onDelete('cascade');
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
        Schema::dropIfExists('kilometrages');
    }
}
