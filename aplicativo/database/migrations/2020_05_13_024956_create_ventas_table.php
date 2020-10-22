<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->double('ven_id', 65);
            $table->double('cli_id', 65);
            $table->double('emp_id', 65);
            $table->date('ven_fecha');
            $table->date('ven_fechaentrega');
            
            //$table->timestamps();
            $table->primary('ven_id');
            $table->foreign('cli_id')->references('cli_id')->on('clientes');
            $table->foreign('emp_id')->references('emp_id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
