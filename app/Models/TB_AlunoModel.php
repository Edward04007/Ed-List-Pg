<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_AlunoModel extends Model
{
    use HasFactory;
    protected $table = 'tb_aluno';

    protected $fillable = [
        'nome',
        'senha',
        'pk_aluno',
        'foto',
    ];

    protected $hidden = [
        'senha'
    ];

    protected $primaryKey = 'pk_aluno';
    public $timestamps = false;
}
