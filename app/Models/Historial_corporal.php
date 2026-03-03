<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_corporal extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fecha',
        'edad',
        'estatura',
        'peso',
        'hombro',
        'pecho_rep',
        'pecho_cont',
        'espalda_rep',
        'espalda_cont',
        'brazo_d_rep',
        'brazo_d_cont',
        'brazo_i_rep',
        'brazo_i_cont',
        'cintura',
        'cadera',
        'muslo_d_rep',
        'muslo_d_cont',
        'muslo_i_rep',
        'muslo_i_cont',
        'panto_d_rep',
        'panto_d_cont',
        'panto_i_rep',
        'panto_i_cont'
    ];
}
