<?php

namespace App\Http\Controllers;

use App\Mail\Informacion;
use App\Models\Publicacion;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $publicaciones = Publicacion::orderby('id', 'desc')->get();
    
        return view('publicacion/publicacion-index', compact('publicaciones', 'user'));
    }

    public function indexCanino()
    {
        $user = auth()->user();
        $publicaciones = Publicacion::where('tipo', 'canino')->orderBy('id', 'desc')->get();
        return view('publicacion.publicacion-index', compact('publicaciones', 'user'));
    }

    public function indexFelino()
    {
        $user = auth()->user();
        $publicaciones = Publicacion::where('tipo', 'felino')->orderBy('id', 'desc')->get();
        return view('publicacion.publicacion-index', compact('publicaciones', 'user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin')) {
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
            'raza' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'edad' => 'required|integer|min:0|max:25',
            'color' => 'required|max:255',
            'tipo' =>  'required|max:255',
        ]);

        $publicacion = new Publicacion();

        $publicacion->nombre = $request->input('nombre');
        $publicacion->raza = $request->input('raza');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->edad = $request->input('edad');
        $publicacion->color = $request->input('color');
        $publicacion->tipo = $request->input('tipo');
        $publicacion->archivo_nombre = $request->file('archivo')->getClientOriginalName();
        $publicacion->archivo_ubicacion = $request->file('archivo')->store('imgPublicaciones');

        $publicacion->save();
    
            // Crear una nueva instancia de Status con el estado por defecto 'noAdoptado'
        $status = new Status(['status' => 'No Adoptado']);

        // Asociar la publicación recién creada con el estado
        $publicacion->status()->save($status);

        return redirect()->route('publicacion.index')->with('success', 'Mascota creada correctamente');
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
        if (!Gate::allows('admin')) {
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

        return redirect()->route('publicacion.index')->with('success', 'Mascota actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }

        $publicacion->delete();
        return redirect()->route('publicacion.index');
    }

    public function inicioPanel()
    {
        $publicaciones = Publicacion::orderby('id', 'desc')->get();
    
        return view('InicioPanel', compact('publicaciones'));
    }
    
    public function interes($publicacion_id)
{
    
    $publicacion = Publicacion::find($publicacion_id);

    $user = auth()->user();

    $publicacion->users()->syncWithoutDetaching([$user->id]);

    Mail::to($user->email)->send(new Informacion($publicacion, $user));

    return redirect()->back()->with('success', 'Te has interesado en la publicación.');
    }

    public function publicacionInteresados(Publicacion $publicacion)
    {

        return view('publicacion-interesados', compact('publicacion'));
    }

        public function adoptado(Publicacion $publicacion)
    {
        $publicacion->status->update(['status' => 'Adoptado']);

        return redirect()->back();
    }

    
    public function noadoptado(Publicacion $publicacion)
    {
        $publicacion->status->update(['status' => 'No Adoptado']);

        return redirect()->back();
    }
}
