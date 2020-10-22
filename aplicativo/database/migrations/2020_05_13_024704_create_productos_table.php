<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->double('pro_id',65);
            $table->string('pro_nombre', 40);
            $table->float('pro_pvp', 40);
            $table->float('pro_pvadistri', 40);
            $table->string('pro_descripcion', 50);
            //$table->timestamps();
            $table->primary('pro_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
