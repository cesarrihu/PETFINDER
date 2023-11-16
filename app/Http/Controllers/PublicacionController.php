<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        if (! Gate::allows('admin')) {
            abort(403);
        }
 

        return view('publicacion/publicacion-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'raza' => 'required',
            'descripcion' => 'required',
            'edad' => 'required|integer', 
            'color' => 'nullable',
        ]);
    
        $publicacion = new Publicacion();
    
        $publicacion->nombre = $request->input('nombre');
        $publicacion->raza = $request->input('raza');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->edad = $request->input('edad');
        $publicacion->color = $request->input('color');
    
        $publicacion->save();
    
        return redirect()->route('publicacion.index');
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
        if (! Gate::allows('admin')) {
            abort(403);
        }
        return view('publicacion/publicacion-edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        
        $request->validate([
            'nombre' => 'required|max:255',
            'raza' => 'required',
            'descripcion' => 'required',
            'edad' => 'required|integer', 
            'color' => 'nullable',
        ]);
        
        $publicacion->nombre = $request->input('nombre');
        $publicacion->raza = $request->input('raza');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->edad = $request->input('edad');
        $publicacion->color = $request->input('color');
    
        $publicacion->save();
    
        return redirect()->route('publicacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $publicacion->delete();
        return redirect()->route('publicacion.index');
    }
}
