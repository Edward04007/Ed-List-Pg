<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lista', function (Blueprint $table) {
            $table->integer('pk_lista', true);
            $table->integer('fk_aluno');
            $table->integer('fk_disciplina');
            $table->integer('fk_anexo');
            $table->integer('fk_status')->default(1);
            $table->char('data_entregue', 10)->nullable();
            $table->index(['fk_aluno', 'fk_status'], 'idx_lista_aluno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lista');
    }
}
