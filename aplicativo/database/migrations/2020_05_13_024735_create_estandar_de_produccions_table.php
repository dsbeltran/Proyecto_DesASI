<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstandarDeProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estandar_de_produccions', function (Blueprint $table) {
            $table->double('est_id',65);
            $table->double('mez_id', 15);
            $table->double('qui_id', 65);
            $table->float('est_nombre', 15);
            $table->string('est_descripcion', 40);
            
            //$table->timestamps();
            $table->primary('est_id');
            $table->foreign('mez_id')->references('mez_id')->on('maquinarias');
            $table->foreign('qui_id')->references('qui_id')->on('materia_primas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estandar_de_produccions');
    }
}
