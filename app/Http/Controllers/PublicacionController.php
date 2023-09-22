<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::orderby('id', 'desc')->get();
    
        return view('publicacion/publicacion-index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publicacion/publicacion-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publicacion = new Publicacion();

        $publicacion->nombre = $request->nombre;
        $publicacion->raza = $request->raza;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->edad = $request->edad;
        $publicacion->color = $request->color;

        $publicacion->save();

        return redirect()->route('publicacion.index');

       // return view('publicacion/publicacion-store');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion) //   
    {
       // $publicacion = new Publicacion;
        //dd ($publicacion);
        return view('publicacion/publicacion-show', compact('publicacion'));

        //$publicacion = Publicacion::find($id);
        //return $publicacion;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }
}
