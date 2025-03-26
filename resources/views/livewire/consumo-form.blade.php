<div>
  <div class="container">
    <h1>Nuevo consumo de comida</h1>
    <!-- Mostrar mensaje de éxito si existe -->
    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif

    <form wire:submit.prevent="registrarConsumo">
    <!-- Campo de fecha: hoy -->
      <div class="form-group">
        <label for="fechaHoy">Hoy</label>
        <input type="checkbox" id="fechaHoy" wire:model="fechaHoy" class="form-control">
        @error('fechaHoy')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de alimento -->
      <div class="form-group">
        <label for="id_alimento">Categoria</label>
        <select id="id_alimento" wire:model="id_alimento" class="form-control">
          <option value="">Seleccione un alimento</option>
          @foreach ($alimentos as $alimento)
            <option value="{{ $alimento->id }}">{{ $alimento->nombre }}</option>
          @endforeach
        </select>
        @error('id_alimento')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de cantidad -->
      <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" wire:model="cantidad" class="form-control"></input>
        @error('cantidad')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Campo de fecha -->
      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" id="fecha" wire:model="fecha" class="form-control">
        @error('fecha')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <!-- Botón de enviar -->
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
