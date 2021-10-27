<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('role', ['admin', 'cliente'])->default('cliente');
            $table->enum('type_doc', ['dni', 'ce'])->default('dni');
            $table->string('num_doc')->nullable();
            $table->integer('profile_complet')->default(0);
            $table->string('sex')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
