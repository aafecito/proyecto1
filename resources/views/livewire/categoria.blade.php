<!-- resources/views/livewire/categoria.blade.php -->
<div>
    <h1>Categorías</h1>
    <table>
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
