<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante_cards extends Model
{
    use HasFactory;

    protected $table = 'estudiante_cards';
    protected $fillable = [
        'nombre', 
        'proyecto',
        'matricula',
        'correo',
        'foto',
    ];
}
