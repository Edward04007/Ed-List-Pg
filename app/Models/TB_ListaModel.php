<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_ListaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_lista';

    protected $fillable = [
        'pk_lista',
        'fk_aluno',
        'fk_disciplina',
        'fk_anexo',
        'fk_status',
        'data_entregue'
    ];

    public $timestamps = false;
}
