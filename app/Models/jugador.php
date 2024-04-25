<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;

    protected $table ='jugadores';
    protected $fillable = [
        'nombre_jugador',
        'equipo_jugador',
        'goles'
    ];

   
}

