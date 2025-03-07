<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; // Importa On para los eventos

class Categoria extends Component
{
  public $categorias = [];

  public function mount()
  {
    $this->categorias = \App\Models\categoria::all();  // Cargar las categorías al inicializar el componente
  }

  #[On('categoriaCreada')] // Esto reemplaza $listeners en Livewire 3
  public function actualizarLista()
  {
    $this->categorias = \App\Models\categoria::all();  // Actualizar la lista de categorías
    $this->render();
  }
  public function render()
  {
    return view('livewire.categoria');  // La vista del componente Livewire
  }
}
