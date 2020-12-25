<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_lista', function (Blueprint $table) {
            $table->foreign('fk_aluno', 'tb_lista_fk_aluno_fkey')->references('pk_aluno')->on('tb_aluno')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_disciplina', 'tb_lista_fk_disciplina_fkey')->references('pk_disciplina')->on('tb_disciplina')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_anexo', 'tb_lista_fk_anexo_fkey')->references('pk_anexo')->on('tb_anexo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_status', 'tb_lista_fk_status_fkey')->references('pk_status')->on('tb_status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_lista', function (Blueprint $table) {
            $table->dropForeign('tb_lista_fk_aluno_fkey');
            $table->dropForeign('tb_lista_fk_disciplina_fkey');
            $table->dropForeign('tb_lista_fk_anexo_fkey');
            $table->dropForeign('tb_lista_fk_status_fkey');
        });
    }
}
