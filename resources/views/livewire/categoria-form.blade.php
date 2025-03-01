<div>
  <div class="container">
    <h1>Crear categoria</h1>
    <!-- Mostrar mensaje de éxito si existe -->
    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif

    <form wire:submit.prevent="registrarCategoria">
      <!-- Campo de título -->
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" wire:model="nombre" class="form-control">
        @error('nombre')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de título -->
      <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" wire:model="codigo" class="form-control">
        @error('codigo')
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

      <!-- Botón de enviar -->
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
