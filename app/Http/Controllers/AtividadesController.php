<?php

namespace App\Http\Controllers;

use App\Models\TB_ListaModel;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
    public function lista_atribuida(){

        $ats = TB_ListaModel::
            where('fk_aluno','=', session('UsuarioLogado'))->
            where('fk_status','=','1')->
            join('tb_disciplina','fk_disciplina','=','pk_disciplina')->
            join('tb_anexo','fk_anexo','=','pk_anexo')->
            select('data_entrega','url','materia','pk_lista')->paginate(4);
            
        return view('pages/fazer', compact('ats'));
    }

    public function lista_concluido(){

        $ats = TB_ListaModel::
            where('fk_aluno','=', session('UsuarioLogado'))->
            where('fk_status','=','2')->
            join('tb_disciplina','fk_disciplina','=','pk_disciplina')->
            join('tb_anexo','fk_anexo','=','pk_anexo')->
            select('data_entrega','data_entregue','url','materia')->paginate(4);

        return view('pages/feito', compact('ats'));

    }

    public function update($id){

        $update = TB_ListaModel::
        where('pk_lista', $id)->
        update(['fk_status' => 2, 'data_entregue' => date('d/m/Y')]);
        return redirect()->back();
    }
}
