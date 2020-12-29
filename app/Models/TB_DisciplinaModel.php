<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_DisciplinaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_disciplina';

    protected $fillable = [
        'pk_disciplina',
        'materia',
    ];

    public $timestamps = false;
}
