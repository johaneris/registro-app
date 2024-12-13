@extends ('layouts.app')
@section ('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="container mt-5">
                <h2 class="mb-4">Productos</h2>
                <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Crear Producto</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td class="text-center">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Ver</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection