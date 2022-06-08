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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");

            $table->String("logragouro" )->nullable();
            $table->String("numero")->nullable();
            $table->String("cidade")->nullable();
            $table->String("estado")->nullable();
            $table->String("cep");
            $table->String("complemento")->nullable();

            $table->integer("usuario_id")
            ->unsigned();
            $table->timestamps();

            $table->foreign("usuario_id")
            ->references("id")->on("usuarios")
            ->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
};
