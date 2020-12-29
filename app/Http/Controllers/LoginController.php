<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginInsert;
use App\Models\TB_AlunoModel;
use Illuminate\Http\Request;

class LoginController extends Controller{
    
    public function index(){

        if(session()->has('UsuarioLogado')){
            $valitadeUser = TB_AlunoModel::where('pk_aluno', '=', session('UsuarioLogado'))->first();
            return redirect()->route('geral.index');
        }else{
            return view('index');
        }
    }

    public function store(StoreLoginInsert $request){

        $tb_aluno = TB_AlunoModel::where('nome','=', $request-> user)->first();
        if($tb_aluno){
            if(sha1($request-> pass) === $tb_aluno->senha){

                $request->session()->put('UsuarioLogado', $tb_aluno->pk_aluno);
                $request->session()->put('UsuarioNome', $tb_aluno->nome);
                $request->session()->put('UsuarioFoto', $tb_aluno->foto);
                return redirect()->route('geral.index');
            }else{
                return view('index');
            }
        }else{
            return view('index');
        };
    }

    public function lagout(){

        session()->pull('UsuarioLogado');
        return view('index');

    }

}
