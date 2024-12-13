@extends ('layouts.app')
@section ('content')

<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Producto:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="iva" name="iva" {{ $product->iva ? 'checked' : '' }}>
            <label class="form-check-label" for="iva">IVA</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="discount" name="discount" {{ $product->discount ? 'checked' : '' }}>
            <label class="form-check-label" for="discount">Descuento</label>
        </div>
        <div class="form-group">
            <label for="discount_percentage">Porcentaje de Descuento:</label>
            <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" value="{{ $product->discount_percentage }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
</div>

@endsection