<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->double('emp_id',65);            
            $table->string('emp_nombreyapellido', 30);
            $table->string('empl_direccion', 50);
            $table->double('ger_id',65);

            $table->primary('emp_id');
            $table->foreign('ger_id')->references('ger_id')->on('gerentes');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}