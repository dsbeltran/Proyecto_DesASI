<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasDescripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_descripcions', function (Blueprint $table) {
            $table->double('vdes_id',65);
            $table->double('ven_id', 65);
            $table->double('pro_id', 65);
            $table->float('vdes_precio', 30);
            $table->string('vdes_des', 50);
            
            //$table->timestamps();
            $table->primary('vdes_id');
            $table->foreign('ven_id')->references('ven_id')->on('ventas');
            $table->foreign('pro_id')->references('pro_id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_descripcions');
    }
}
