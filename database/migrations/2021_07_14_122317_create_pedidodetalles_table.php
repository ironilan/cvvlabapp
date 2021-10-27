<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidodetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidodetalles', function (Blueprint $table) {
            $table->id();

            $table->decimal('price')->nullable();
            $table->integer('qty')->nullable();
            $table->unsignedBigInteger('examen_id')->nullable();
            $table->foreign('examen_id')->references('id')->on('examens')->onDelete('cascade');
            $table->unsignedBigInteger('pedido_id')->nullable();
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
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
        Schema::dropIfExists('pedidodetalles');
    }
}
