<?php

namespace App\Http\Controllers;

use App\Models\TB_VideoModel;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function recordShow(){

        $listas = TB_VideoModel::select('materia', 'data_gravado_em', 'url_video')->
        join('tb_disciplina','fk_disciplina','=','pk_disciplina')
        ->paginate(4);;
        return view('record', compact('listas'));

    }
}
