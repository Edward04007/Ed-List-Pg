<?php

namespace App\Http\Controllers;

use App\Models\TB_AlunoModel;
use App\Models\TB_AnexoModel;
use App\Models\TB_DisciplinaModel;
use App\Models\TB_ListaModel;
use App\Models\TB_VideoModel;
use Illuminate\Http\Request;

class GeralController extends Controller{

    public function index(){

        $Atividades_total = TB_ListaModel::
                where('fk_aluno', session('UsuarioLogado'))->count();

        $Atividades_atribuido = TB_ListaModel::
                where('fk_aluno', session('UsuarioLogado'))->
                where('fk_status', '1')->count();

        $Atividades_concluido = TB_ListaModel::
                where('fk_aluno', session('UsuarioLogado'))->
                where('fk_status', '2')->count();

        return view('pages/geral', compact('Atividades_total','Atividades_atribuido','Atividades_concluido'));

    }
}
