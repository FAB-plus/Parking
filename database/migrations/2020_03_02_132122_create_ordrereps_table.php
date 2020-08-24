<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdrerepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordrereps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_ordre');
            $table->integer('code');
            $table->text('designation');
            $table->integer('coderep');
            $table->integer('quantity');
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
        Schema::dropIfExists('ordrereps');
    }
}
