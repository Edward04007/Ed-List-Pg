<?php

namespace App\Http\Controllers;

use App\Models\TB_DisciplinaModel;
use App\Models\TB_VideoModel;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function recordShow(){

        $listas_videos = TB_VideoModel::select('materia', 'data_gravado_em', 'url_video')->
        join('tb_disciplina','fk_disciplina','=','pk_disciplina')->paginate(4);

        $discs = TB_DisciplinaModel::all();
        return view('pages/record', compact('listas_videos','discs'));

    }

    public function record_filtre(Request $request){


        if($request->disc == 'todas'){

            return redirect()->route('record.recordShow');

        }else{
            $listas_videos = TB_VideoModel:: where('fk_disciplina','=',$request->disc)->
            select('materia', 'data_gravado_em', 'url_video')->
            join('tb_disciplina','fk_disciplina','=','pk_disciplina')->
            orderBy('materia')->paginate(4);

            $discs = TB_DisciplinaModel::all();
            return view('pages/record', compact('listas_videos','discs'));
        }
    }
}
