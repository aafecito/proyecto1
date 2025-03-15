<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alimento extends Model
{
  protected $fillable = [
    'nombre',
    'calorias',
    'descripcion',
    'estado',
    'id_categoria',
  ];
}
