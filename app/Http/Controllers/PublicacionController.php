<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::all();

        return view('publicaciones.index',['publicaciones' => $publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleadores = User::where('rol_id',2)->get();

        return view('publicaciones.create',['empleadores' => $empleadores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = Auth::user();

        $this->validate($request,[
            'titulo' => 'required|min:3|max:30',
            'descripcion' => 'required|min:3|max:255',
            'salario' => 'required|numeric'
        ]);

        $publicacion = new Publicacion();
        $publicacion->titulo = $request->titulo;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->salario = $request->salario;

        if($usuario->rol_id == 3){
            $publicacion->empleador_id = $request->empleador_id;
        }else{
            $publicacion->empleador_id = $usuario->id;
        }

        $publicacion->save();

        return redirect()->route('publicaciones.index')->with('success','Publicacion creada con exito!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publicacion = Publicacion::find($id);

        return view('publicaciones.show',['publicacion' => $publicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $publicacion = Publicacion::find($id);
        $empleadores = User::where('rol_id',2)->get();

        return view('publicaciones.edit',['publicacion' => $publicacion, 'empleadores' => $empleadores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Auth::user();

        $this->validate($request,[
            'titulo' => 'required|min:3|max:30',
            'descripcion' => 'required|min:3|max:255',
            'salario' => 'required|numeric'
        ]);

        $publicacion = Publicacion::find($id);
        $publicacion->titulo = $request->titulo;
        $publicacion->descripcion = $request->descripcion;
        $publicacion->salario = $request->salario;

        if($usuario->rol_id == 3){
            $publicacion->empleador_id = $request->empleador_id;
        }else{
            $publicacion->empleador_id = $usuario->id;
        }

        $publicacion->save();

        return redirect()->route('publicaciones.index')->with('success','Publicacion actualizada con exito!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publicacion = Publicacion::find($id);
        $publicacion->delete();

        return redirect()->route('publicaciones.index')->with('success','Publicacion eliminada con exito!!');
    }
}
