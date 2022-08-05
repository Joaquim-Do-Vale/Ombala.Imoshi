<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('genero', ['masculino', 'feminino'])->default('masculino');
            $table->string('contactos', 13);
            $table->string('provincia');
            $table->string('cidade');
            $table->string('referencia');
            $table->enum('categoria', ['cameramen', 'escritor', 'editor', 'jornalista', 'reporter', 'outros'])->default('reporter');
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
};
