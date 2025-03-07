<!-- resources/views/livewire/categoria.blade.php -->
<div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
        <h1 class="text-center">Categorías</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categorias as $categoria)
              <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                  <button wire:click="editarCategoria({{ $categoria->id }})" class="btn btn-primary">Editar</button>
                  <button wire:click="eliminarCategoria({{ $categoria->id }})" class="btn btn-danger">Eliminar</button>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
