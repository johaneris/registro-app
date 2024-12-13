<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all(); // Obtiene todos los productos
        return view('products.index', compact('products')); // Muestra todos los productos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create'); // Muestra el formulario para crear un nuevo producto
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product(); // Crea un nuevo producto
        $product->name = $request->name; // Asigna el nombre del producto
        $product->description = $request->description; // Asigna la descripción del producto
        $product->price = $request->price; // Asigna el precio del producto

        if ($request->iva == 'on') { // Si el IVA está activado
            $product->iva = true; // Asigna verdadero al IVA del producto
        } else { // Si el IVA no está activado
            $product->iva = false; // Asigna falso al IVA del producto
        }

        if ($request->discount == 'on') { // Si el descuento está activado
            $product->discount = true; // Asigna verdadero al descuento del producto
        } else { // Si el descuento no está activado
            $product->discount = false; // Asigna falso al descuento del producto
        }

        $product->discount_percentage = $request->discount_percentage; // Asigna el porcentaje de descuento del producto
        $product->stock = $request->stock; // Asigna el stock del producto
        $product->save(); // Guarda el producto
        return redirect()->route('products.index'); // Redirecciona a la lista de productos
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::find($id); // Obtiene el producto
        return view('products.show', compact('product')); // Muestra el producto
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id); // Obtiene el producto
        return view('products.edit', compact('product')); // Muestra el formulario para editar el producto
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id); // Obtiene el producto
        $product->name = $request->name; // Asigna el nombre del producto
        $product->description = $request->description; // Asigna la descripción del producto
        $product->price = $request->price; // Asigna el precio del producto

        if ($request->discount == 'on') { // Si el descuento está activado
            $product->discount = true; // Asigna verdadero al descuento del producto
        } else { // Si el descuento no está activado
            $product->discount = false; // Asigna falso al descuento del producto
        }

        if ($request->iva == 'on') { // Si el IVA está activado
            $product->iva = true; // Asigna verdadero al IVA del producto
        } else { // Si el IVA no está activado
            $product->iva = false; // Asigna falso al IVA del producto
        }

        $product->discount_percentage = $request->discount_percentage; // Asigna el porcentaje de descuento del producto
        $product->stock = $request->stock; // Asigna el stock del producto
        $product->save(); // Guarda el producto
        return redirect()->route('products.index'); // Redirecciona a la lista de productos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id); // Obtiene el producto
        $product->delete(); // Elimina el producto
        return redirect()->route('products.index'); // Redirecciona a la lista de productos
    }
}
