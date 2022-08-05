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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('tema')->unique();
            $table->enum('tipo', ['POLITICA', 'REGIOES', 'SOCIEDADE', 'ECONOMIA', 'CIENCIA', 'CULTURA', 'RELIGIOES', 'DESPORTO', 'ENTREVISTA', 'REPORTAGEM', 'OPINIAO', 'MUNDO']);
            $table->longText('noticia_d');
            $table->float('orcamento');
            $table->string('fonte');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('noticias');
    }
};
