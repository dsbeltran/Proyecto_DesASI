<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOredenDetrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oreden_detrabajos', function (Blueprint $table) {
            $table->double('ord_id',15);
            $table->double('emp_id', 65);
            $table->double('est_id', 65);
            $table->date('ord_fecha_ini');
            $table->date('ord_fecha_fin');
            
            //$table->timestamps();
            $table->primary('ord_id');
            $table->foreign('emp_id')->references('emp_id')->on('empleados');
            $table->foreign('est_id')->references('est_id')->on('estandar_de_produccions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oreden_detrabajos');
    }
}
