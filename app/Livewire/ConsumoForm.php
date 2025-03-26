<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\alimento;
use App\Models\consumo;

class ConsumoForm extends Component
{
  public $alimentos = [];
  public $fechaHoy = '';
  public $fecha = '';
  public $id_alimento = '';
  public $cantidad = '';

  public function mount() {
    $this->cargarListas();
  }

  public function cargarListas()
  {
    $this->alimentos = alimento::where('estado', 1)->get();
  }

  public function registrarConsumo(){
    $this->validate([
      'fecha' => 'required',
      'alimentoId' => 'required',
      'cantidad' => 'required|numeric',
    ]);

    $consumo = new consumo();
    $consumo->fecha = $this->fecha;
    $consumo->id_alimento = $this->id_alimento;
    $consumo->cantidad = $this->cantidad;
    $consumo->save();

    $this->fecha = '';
    $this->id_alimento = '';
    $this->cantidad = '';
    $this->cargarListas();
  }

  public function render()
  {
    return view('livewire.consumo-form');
  }
}
