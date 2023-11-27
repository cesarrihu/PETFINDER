<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderby('id', 'desc')->get();
    
        return view('products/product-index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }
    
        return view('products/product-create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/', 
            'color' => 'nullable',
        ]);

        $product = new Product();

        $product->nombre = $request->input('nombre');;
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');
        $product->color = $request->input('color');
        $product->foto_nombreProd = $request->file('archivo2')->getClientOriginalName();
        $product->foto_ubicacionProd = $request->file('archivo2')->store('imgProductos');

        $product->save();

        return redirect()->route('product.index')->with('success', '¡El Producto esta disponible en tu pagina!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products/product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        return view('products/product-edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/', 
            'color' => 'nullable',
        ]);

        $product->nombre = $request->input('nombre');;
        $product->descripcion = $request->input('descripcion');
        $product->precio = $request->input('precio');
        $product->color = $request->input('color');

        $product->save();

        return redirect()->route('product.index')->with('success', '¡El Producto se actualizo correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $product->delete();
        return redirect()->route('product.index');
    }
}
