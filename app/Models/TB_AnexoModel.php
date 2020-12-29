<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_AnexoModel extends Model
{
    use HasFactory;

    protected $table = 'tb_anexo';

    protected $fillable = [
        'pk_anexo',
        'url',
        'data_entrega'
    ];
    protected $primaryKey = 'pk_anexo';
    public $timestamps = false;
}
