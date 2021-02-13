<?php

namespace App\Http\Controllers;

use App\Models\TB_ListaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtividadesController extends Controller
{
    public function lista_atribuida(){

        $ats = TB_ListaModel::
            where('fk_aluno', session('UsuarioLogado'))->
            where('fk_status','1')->
            join('tb_disciplina','fk_disciplina','pk_disciplina')->
            join('tb_anexo','fk_anexo','pk_anexo')->
            select('data_entrega','url','materia','pk_lista')->paginate(4);

            $discs = TB_ListaModel::
           where('fk_aluno', session('UsuarioLogado'))->
           where('fk_status','1')->
           join('tb_disciplina','pk_disciplina','fk_disciplina')->
           select('materia', 'fk_disciplina')->distinct()->get();

            return view('pages/fazer', compact('ats','discs'));
    }

    public function lista_concluido(){

        $ats = TB_ListaModel::
            where('fk_aluno', session('UsuarioLogado'))->
            where('fk_status','2')->
            join('tb_disciplina','fk_disciplina','pk_disciplina')->
            join('tb_anexo','fk_anexo','pk_anexo')->
            select('data_entrega','data_entregue','url','materia')->paginate(4);

           $discs = TB_ListaModel::
           where('fk_aluno', session('UsuarioLogado'))->
           where('fk_status','2')->
           join('tb_disciplina','pk_disciplina','fk_disciplina')->
           select('materia', 'fk_disciplina')->distinct()->get();

        return view('pages/feito', compact('ats', 'discs'));

    }

    public function update($id){

        $update = TB_ListaModel::
        where('pk_lista', $id)->
        update(['fk_status' => 2, 'data_entregue' => date('d/m/Y')]);

        return redirect()->back();
    }

    public function filtrar_atribuido(Request $request){
        if($request->disc == 'todas'){

            return redirect()->route('fazer.lista_atribuida');

        }else{
            $ats = TB_ListaModel::
            where('fk_aluno', session('UsuarioLogado'))->
            where('fk_status','1')->
            where('fk_disciplina',$request->disc)->
            join('tb_disciplina','fk_disciplina','pk_disciplina')->
            join('tb_anexo','fk_anexo','pk_anexo')->
            select('data_entrega','url','materia','pk_lista')->orderBy('materia')->paginate(4);

            $discs = TB_ListaModel::
           where('fk_aluno', session('UsuarioLogado'))->
           where('fk_status','1')->
           join('tb_disciplina','pk_disciplina','fk_disciplina')->
           select('materia', 'fk_disciplina')->distinct()->get();

            return view('pages/fazer', compact('ats','discs'));
        }
    }

    public function filtrar_concluido(Request $request){

        if($request->disc == 'todas'){

            return redirect()->route('feito.lista_concluido');

        }else{
            $ats = TB_ListaModel::
            where('fk_aluno', session('UsuarioLogado'))->
            where('fk_status','2')->
            where('fk_disciplina',$request->disc)->
            join('tb_disciplina','fk_disciplina','pk_disciplina')->
            join('tb_anexo','fk_anexo','pk_anexo')->
            select('data_entrega','data_entregue','url','materia')->orderBy('materia')->paginate(4);

            $discs = TB_ListaModel::
           where('fk_aluno', session('UsuarioLogado'))->
           where('fk_status','2')->
           join('tb_disciplina','pk_disciplina','fk_disciplina')->
           select('materia', 'fk_disciplina')->distinct()->get();

            return view('pages/feito', compact('ats','discs'));
        }
    }
}
