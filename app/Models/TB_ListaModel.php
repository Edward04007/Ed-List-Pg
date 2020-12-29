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
    protected $primaryKey = 'pk_lista';

    protected $casts = [
        'fk_aluno' => 'integer',
        'fk_disciplina' => 'integer',
        'fk_anexo' => 'integer',
        'fk_status' => 'integer',
    ];
    public $timestamps = false;
}
