<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_VideoModel extends Model
{
    use HasFactory;

    protected $table = 'tb_video';

    protected $fillable = [
        'pk_video',
        'fk_disciplina',
        'data_gravado_em',
        'url_video'
    ];

    protected $primaryKey = 'pk_video';
    public $timestamps = false;
}
