<?php

namespace App\Http\Controllers;

use App\Models\TB_AlunoModel;
use Illuminate\Http\Request;

class turmaController extends Controller
{

    public function turmaShow(){

        $listas = TB_AlunoModel::paginate(3);
        return view('turma', compact('listas'));

    }
}
