<?php

namespace App\Http\Controllers;

use App\Models\TB_AlunoModel;
use App\Models\TB_ListaModel;
use Illuminate\Http\Request;

class GeralController extends Controller{

    public function index(){

        $lista = TB_AlunoModel::all();

        $Atividades_total = TB_ListaModel::
                where('fk_aluno', '=', session('UsuarioLogado'))->count();

        $Atividades_atribuido = TB_ListaModel::
                where('fk_aluno', '=', session('UsuarioLogado'))->
                where('fk_status', '=', '1')->count();

        $Atividades_concluido = TB_ListaModel::
                where('fk_aluno', '=', session('UsuarioLogado'))->
                where('fk_status', '=', '2')->count();

        return view('geral', compact(
        'lista','Atividades_total',
        'Atividades_atribuido', 'Atividades_concluido'
        ));

    }

    public function lista_atribuida(){

        $ats = TB_ListaModel::
            where('fk_aluno','=', session('UsuarioLogado'))->
            where('fk_status','=','1')->
            join('tb_disciplina','fk_disciplina','=','pk_disciplina')->
            join('tb_anexo','fk_anexo','=','pk_anexo')->
            select('data_entrega','url','materia','pk_lista')->paginate(5);
        return view('fazer', compact('ats'));
    }

    public function lista_concluido(){

        $ats = TB_ListaModel::
            where('fk_aluno','=', session('UsuarioLogado'))->
            where('fk_status','=','2')->
            join('tb_disciplina','fk_disciplina','=','pk_disciplina')->
            join('tb_anexo','fk_anexo','=','pk_anexo')->
            select('data_entrega','data_entregue','url','materia')->paginate(5);

        return view('feito', compact('ats'));

    }

    public function lagout(){

        session()->pull('UsuarioLogado');
        return view('index');

    }

    public function update($id){

        $update = TB_ListaModel::
        where('pk_lista', $id)->
        update(['fk_status' => 2, 'data_entregue' => date('d/m/Y')]);
        
        return redirect()->back();
    }
}
