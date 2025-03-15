<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; // Importa On para los eventos
use App\Models\categoria as cat;

class Categoria extends Component
{
  public $categorias = [];
  public $editando = []; // Array para rastrear qué filas están en edición
  public $nuevosValores = []; // Guardar los valores editados

  public function mount()
  {
    $this->cargarCategoria();  // Cargar las categorías al inicializar el componente
  }

  public function cargarCategoria()
  {
    $this->categorias = cat::all();
  }

  #[On('categoriaCreada')] // Esto reemplaza $listeners en Livewire 3
  public function actualizarLista()
  {
    $this->cargarCategoria();  // Actualizar la lista de categorías
  }

  // Método para activar la edición de una fila específica
  public function editar($categoriaId)
  {
    $this->editando[$categoriaId] = true;
    $categoria = cat::find($categoriaId);
    $this->nuevosValores[$categoriaId] = [
      'nombre' => $categoria->nombre,
      'descripcion' => $categoria->descripcion,
    ];
  }

  public function eliminar($categoriaId)
  {
    cat::destroy($categoriaId);
    $this->actualizarLista();
  }

  // Método para guardar los cambios
  public function guardar($categoriaId)
  {
    $categoria = cat::find($categoriaId);
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
