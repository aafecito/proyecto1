<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consumo extends Model
{
  protected $fillable = ['fecha', 'cantidad', 'id_alimento'];

  public function alimento()
  {
    return $this->belongsTo('App\Models\alimento', 'id_alimento');
  }
}
