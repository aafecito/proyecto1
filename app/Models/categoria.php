<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
  protected $fillable = [
    'nombre',
    'descripcion',
    'codigo',
    'estado',
  ];
}
