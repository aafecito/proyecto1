<div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
        <h1 class="text-center">Alimentos</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Calorías</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($alimentos as $alimento)
              <tr>
                @if (isset($editando[$alimento->id]) && $editando[$alimento->id])
                  <!-- Campos Editables -->
                  <td>
                    <input type="text" wire:model="nuevosValores.{{ $alimento->id }}.nombre">
                  </td>
                  <td>
                    <input type="text" wire:model="nuevosValores.{{ $alimento->id }}.calorias">
                  </td>
                  <td>
                    <input type="text" wire:model="nuevosValores.{{ $alimento->id }}.descripcion">
                  </td>
                  <td>
                    <button wire:click="guardar({{ $alimento->id }})" class="btn btn-success">Guardar</button>
                  </td>
                @else
                  <!-- Campos en modo solo lectura -->
                  <td>{{ $alimento->nombre }}</td>
                  <td>{{ $alimento->calorias }}</td>
                  <td>{{ $alimento->descripcion }}</td>
                  <td>
                    <button wire:click="editar({{ $alimento->id }})" class="btn btn-primary">Editar</button>
                    <button wire:click="eliminar({{ $alimento->id }})" class="btn btn-danger">Eliminar</button>
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
