<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\alimento;
use App\Models\categoria;
use Livewire\Attributes\On;

class AlimentoGrid extends Component
{
  public $alimentos = [];
  public $editando = []; // Array para rastrear qué filas están en edición
  public $nuevosValores = []; // Guardar los valores editados
  public $categorias = [];

  public function mount()
  {
    $this->cargarAlimentos();
  }

  #[On('alimentoCreado')]
  public function actualizarLista()
  {
    $this->cargarAlimentos();
  }

  public function cargarAlimentos()
  {
    $this->alimentos = alimento::with('categoria')->where('estado', 1)->get();
    $this->categorias = categoria::all();
  }

  public function editar($alimentoId)
  {
    $this->editando[$alimentoId] = true;
    $alimento = alimento::find($alimentoId);
    $this->nuevosValores[$alimentoId] = [
      'nombre' => $alimento->nombre,
      'calorias' => $alimento->calorias,
      'descripcion' => $alimento->descripcion,
      'id_categoria' => $alimento->id_categoria,
    ];
  }

  public function guardar($alimentoId)
  {
    $alimento = alimento::find($alimentoId);
    $alimento->update($this->nuevosValores[$alimentoId]);

    unset($this->editando[$alimentoId]);
    $this->cargarAlimentos();
  }

  public function eliminar($alimentoId)
  {
    // Encuentra el alimento por su ID
    $alimento = alimento::find($alimentoId);

    // Verifica que el alimento exista
    if ($alimento) {
      // Actualiza el estado del alimento
      $alimento->update(['estado' => 0]);
    }

    // Carga nuevamente los alimentos después de la actualización
    $this->cargarAlimentos();
  }

  public function render()
  {
    return view('livewire.alimento-grid');
  }
}
