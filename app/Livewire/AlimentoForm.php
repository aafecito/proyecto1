<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\alimento;
use App\Models\categoria;

class AlimentoForm extends Component
{
  public $nombre;
  public $calorias;
  public $descripcion;
  public $id_categoria;
  public $categorias = [];

  public function mount()
  {
    $this->cargarListas();
  }

  public function cargarListas()
  {
    $this->categorias = categoria::all();
  }
  public function registrarAlimento()
  {
    $this->validate([
      'nombre' => 'required|string|max:100',
      'calorias' => 'required|string|max:10',
      'descripcion' => 'required|string|max:250',
      'id_categoria' => 'required',
    ]);

    alimento::create([
      'nombre' => $this->nombre,
      'calorias' => $this->calorias,
      'descripcion' => $this->descripcion,
      'id_categoria' => $this->id_categoria,
    ]);

    $this->nombre = '';
    $this->calorias = '';
    $this->descripcion = '';

    $this->dispatch('alimentoCreado');
    session()->flash('message', 'Alimento creado exitosamente!');
  }
  public function render()
  {
    return view('livewire.alimento-form');
  }
}
