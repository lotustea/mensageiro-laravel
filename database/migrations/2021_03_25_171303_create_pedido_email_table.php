<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_email', function (Blueprint $table) {
            $table->id();
            $table->string('remetente');
            $table->string('destinatario');
            $table->json('dados');
            $table->string('cliente');
            $table->string('status');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('modelo_email_id');
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('modelo_email_id')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_email');
    }
}
