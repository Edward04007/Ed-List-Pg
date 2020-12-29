<?php

namespace App\Http\Controllers;

use App\Models\TB_AlunoModel;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfilShow(){

        return view('perfil');
    }

    public function FotoUpdate(Request $request){

        $validateSenha = TB_AlunoModel::
        where('pk_aluno', session('UsuarioLogado'))
        ->where('senha', sha1($request->pass))->get();

        if(sha1($request->pass) ==  $validateSenha[0]->senha){

            $update = TB_AlunoModel::
            where('pk_aluno', session('UsuarioLogado'))->
            update([

                'foto' => $request->image,

                 ]);

            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function SenhaUpdate(Request $request){

        $validateSenha = TB_AlunoModel::
        where('pk_aluno', session('UsuarioLogado'))
        ->where('senha', sha1($request->pass))->get();

        if(sha1($request->pass) ==  $validateSenha[0]->senha){

            $update = TB_AlunoModel::
            where('pk_aluno', session('UsuarioLogado'))->
            update([
                'senha' => sha1($request->passNow),
                 ]);

            return redirect()->back();

        }else{

            return redirect()->back();
        }

    }
}
