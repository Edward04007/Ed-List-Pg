<?php

namespace App\Http\Controllers;

use App\Models\TB_AlunoModel;
use App\Models\TB_AnexoModel;
use App\Models\TB_DisciplinaModel;
use App\Models\TB_ListaModel;
use App\Models\TB_VideoModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminShow(){
        if(session('UsuarioLogado') == '1'){

            $discs = TB_DisciplinaModel::all();

            return view('admin/add', compact('discs'));

        }else{

            return back();
        }
    }

    public function insertLista(Request $request){
        if(session('UsuarioLogado') == '1'){

           $data  = implode('/', array_reverse(explode('-', $request->dataEntrega)));

            $insertAnexo = TB_AnexoModel::create(['url' => $request->url,'data_entrega' => $data]);

            if($insertAnexo){

                $allAlunos = TB_AlunoModel::all();

                if($allAlunos){

                    $anexo = TB_AnexoModel::select('pk_anexo')
                    ->orderByDesc('pk_anexo')->limit(1)->get();
                    foreach($allAlunos as $aluno){

                        $insertLista =  TB_ListaModel::create([
                            'fk_aluno' => $aluno->pk_aluno,
                            'fk_disciplina' => $request->disc,
                            'fk_anexo' => $anexo[0]->pk_anexo,
                        ]);
                    }

                    return back();;
                }
            }
        }else{

            return back();
        }
    }

    public function insertAluno(Request $request){
        if(session('UsuarioLogado') == '1'){

                $senha = sha1($request->passw);

            $insertAluno =  TB_AlunoModel::create([
                'fk_aluno' => $request->url_foto,
                'fk_disciplina' => $request->aluno_novo,
                'fk_anexo' => $senha,
            ]);

            return back();

        }else{
            return back();
        }
    }

    public function insertvideo(Request $request){
        if(session('UsuarioLogado') == '1'){

            $doDia  = implode('/', array_reverse(explode('-', $request->doDia)));

            $insertVideo = TB_VideoModel::create([
                'fk_disciplina' => $request->discip,
                'url_video' => $request->url_video,
                'data_gravado_em' => $doDia,
            ]);

            return back();

        }else{

            return back();
        }
    }
}
