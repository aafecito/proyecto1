<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categoria;

class CategoriaForm extends Component
{
  // Propiedades que capturarán los datos del formulario
  public $nombre;
  public $descripcion;
  public $codigo;
  // Método para guardar el nuevo post
  public function registrarCategoria()
  {
    // Validación
    $this->validate([
      'nombre' => 'required|string|max:100',
      'descripcion' => 'required|string|max:250',
      'codigo' => 'required|string|max:10',
    ]);

    // Crear el nuevo registro en la base de datos
    categoria::create([
      'nombre' => $this->nombre,
      'descripcion' => $this->descripcion,
      'codigo' => $this->codigo,
    ]);

    // Limpiar los campos después de guardar
    $this->nombre = '';
    $this->descripcion = '';
    $this->codigo = '';

    // Opcional: Emitir un mensaje de éxito o redirigir
    session()->flash('message', 'Post creado exitosamente!');
  }

  public function render()
  {
    return view('livewire.categoria-form');
  }
}
