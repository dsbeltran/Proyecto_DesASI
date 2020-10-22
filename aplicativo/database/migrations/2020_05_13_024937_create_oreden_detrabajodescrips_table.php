<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOredenDetrabajodescripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oreden_detrabajodescrips', function (Blueprint $table) {
            $table->double('odes_id',65);
            $table->double('pro_id', 65);
            $table->double('ord_id', 15);
            $table->string('odes_desc', 40);
            
            //$table->timestamps();
            $table->primary('odes_id');
            $table->foreign('pro_id')->references('pro_id')->on('productos');
            $table->foreign('ord_id')->references('ord_id')->on('oreden_detrabajos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oreden_detrabajodescrips');
    }
}