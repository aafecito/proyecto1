<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; // Importa On para los eventos

class Categoria extends Component
{
  public $categorias = [];
  public $editando = []; // Array para rastrear qué filas están en edición
  public $nuevosValores = []; // Guardar los valores editados



  public function mount()
  {
    $this->categorias = \App\Models\categoria::all();  // Cargar las categorías al inicializar el componente
  }

  #[On('categoriaCreada')] // Esto reemplaza $listeners en Livewire 3
  public function actualizarLista()
  {
    $this->categorias = \App\Models\categoria::all();  // Actualizar la lista de categorías
  }

  // Método para activar la edición de una fila específica
  public function editar($categoriaId)
  {
    $this->editando[$categoriaId] = true;
    $categoria = \App\Models\categoria::find($categoriaId);
    $this->nuevosValores[$categoriaId] = [
      'nombre' => $categoria->nombre,
      'descripcion' => $categoria->descripcion,
    ];
  }

  public function eliminar($categoriaId)
  {
    \App\Models\categoria::destroy($categoriaId);
    $this->actualizarLista();
  }

  // Método para guardar los cambios
  public function guardar($categoriaId)
  {
    $categoria = \App\Models\categoria::find($categoriaId);
    $categoria->update($this->nuevosValores[$categoriaId]);

    // Desactivar la edición
    unset($this->editando[$categoriaId]);
    $this->actualizarLista();
  }

  public function render()
  {
    return view('livewire.categoria');  // La vista del componente Livewire
  }
}
