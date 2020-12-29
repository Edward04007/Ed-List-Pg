<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_video', function (Blueprint $table) {
            $table->foreign('pk_video', 'video_disciplina')->references('pk_disciplina')->on('tb_disciplina')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_video', function (Blueprint $table) {
            $table->dropForeign('video_disciplina');
        });
    }
}
