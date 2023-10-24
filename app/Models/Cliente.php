<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey='id_cliente';

    protected $fillable = [
        'nombre',
        'apellido',
        'genero',
        'fecha_nacimiento',
        'telefono',
        'correo',
        'direccion',
        'ciudad',
        'pais'
    ];
}
