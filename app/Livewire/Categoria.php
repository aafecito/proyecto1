<?php

namespace App\Livewire;

use Livewire\Component;

class Categoria extends Component
{
  public $categorias = [];

  public function mount()
  {
    $this->categorias = \App\Models\categoria::all();  // Cargar las categorías al inicializar el componente
  }

  public function render()
  {
    return view('livewire.categoria');  // La vista del componente Livewire
  }
}
