<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->decimal('price')->nullable();
            $table->string('image')->nullable();
            $table->text('indicators')->nullable();
            $table->string('methodology')->nullable();
            $table->string('process_time')->nullable();
            $table->enum('fasting_condition', ['si', 'no'])->default('si');
            $table->enum('tipo', ['examen', 'promocion'])->default('examen');
            $table->string('time_delivery')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->unsignedBigInteger('tipomuestra_id')->nullable();
            $table->foreign('tipomuestra_id')->references('id')->on('tipomuestras')->onDelete('cascade');

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
        Schema::dropIfExists('examens');
    }
}
