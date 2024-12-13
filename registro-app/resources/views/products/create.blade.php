@extends ('layouts.app')
@section ('content')

<div class="container">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Precio">
        </div>
        <!-- // iva -->
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="iva" name="iva">
            <label class="form-check-label" for="iva">Aplica IVA</label>
        </div>
        <!-- //Descuento -->
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="discount" name="discount">
            <label class="form-check-label" for="discount">Aplica descuento</label>
        </div>
        <!-- Porcentaje de descuento -->
        <div class="form-group">
            <label for="discount_percentage">Porcentaje de descuento</label>
            <input type="text" class="form-control" id="discount_percentage" name="discount_percentage" placeholder="Porcentaje de descuento">
        </div>
        <!-- Stock -->
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection