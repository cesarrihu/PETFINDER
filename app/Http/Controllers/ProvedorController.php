<?php

namespace App\Http\Controllers;
use App\Models\Provedor;
use App\Models\Product;

use Illuminate\Http\Request;

class ProvedorController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provedores = Provedor::with('productos')->get();

        return view('provedor-index', compact('provedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('provedor-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $provedor = new Provedor(); 
        $provedor->provedorNombre = $request->provedorNombre;
        $provedor->save();

        return redirect()->route('provedor.index')->with('success', '¡El Provedor se registró con éxito!');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(Provedor $provedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provedor $provedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provedor $provedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provedor $provedor)
    {
        //
    }
}