<!-- resources/views/livewire/categoria.blade.php -->
<div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 col-sm-12 mx-auto">
        <h1 class="text-center">Categorías</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categorias as $categoria)
              <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
