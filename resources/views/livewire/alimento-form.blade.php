<div>
  <div class="container">
    <h1>Crear alimento</h1>
    <!-- Mostrar mensaje de éxito si existe -->
    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif

    <form wire:submit.prevent="registrarAlimento">
      <!-- Campo de título -->
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" wire:model="nombre" class="form-control">
        @error('nombre')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de título -->
      <div class="form-group
      ">
        <label for="calorias">Calorias</label>
        <input type="text" id="calorias" wire:model="calorias" class="form-control">
        @error('calorias')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de contenido -->
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" wire:model="descripcion" class="form-control"></textarea>
        @error('descripcion')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de contenido -->
      <div class="form-group">
        <label for="id_categoria">Categoria</label>
        <select id="id_categoria" wire:model="id_categoria" class="form-control">
          <option value="">Seleccione una categoria</option>
          @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
          @endforeach
        </select>
        @error('id_categoria')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Botón de enviar -->
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
