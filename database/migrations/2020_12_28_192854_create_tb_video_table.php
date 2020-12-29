<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_video', function (Blueprint $table) {
            $table->integer('pk_video', true);
            $table->integer('fk_disciplina')->nullable();
            $table->char('data_gravado_em', 10)->nullable();
            $table->char('url_video', 82)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_video');
    }
}
