@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
</div>

@endsection