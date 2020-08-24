<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date_Cmde');
            $table->text('TravailAeffectuer');
            $table->text('Observations');
            $table->bigInteger('clientId')->unsigned();
            $table->foreign('clientId')->references('id')->on('clients')->onDelete('cascade');
            $table->bigInteger('vehicule_id')->unsigned();
            $table->foreign('Vehicule_id')->references('id')->on('vehicules')->onDelete('cascade');
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
        Schema::dropIfExists('commandes');
    }
}
