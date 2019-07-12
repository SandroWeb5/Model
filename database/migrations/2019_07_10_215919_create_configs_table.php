<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 200)->nullable();
            $table->text('descricao')->nullable();
            $table->text('chaves')->nullable();
            $table->string('email', 200)->nullable();
            $table->string('fone1', 50)->nullable();
            $table->string('fone2', 50)->nullable();
            $table->string('whatsapp1', 50)->nullable();
            $table->string('whatsapp2', 50)->nullable();
            $table->string('endereço', 250)->nullable();
            $table->string('cnpj', 30)->nullable();
            $table->string('contato', 200)->nullable();
            $table->string('slogan', 200)->nullable();
            $table->string('youtube', 250)->nullable();
            $table->string('twitter', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->string('facebook', 250)->nullable();
            $table->string('google', 250)->nullable();
            $table->text('dest1', 250)->nullable();
            $table->text('dest2', 250)->nullable();
            $table->text('dest3', 250)->nullable();
            $table->text('dest4', 250)->nullable();
            $table->text('dest5', 250)->nullable();
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
        Schema::dropIfExists('configs');
    }
}
