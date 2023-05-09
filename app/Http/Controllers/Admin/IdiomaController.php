<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Idioma;
use App\Models\Institucion;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idiomas = Idioma::all();

        return view('admin.idiomas.index',['idiomas' => $idiomas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.idiomas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $idioma = new Idioma();
        $idioma->nombre = $request->nombre;
        $idioma->save();

        return redirect()->route('idiomas.index')->with('success','Idioma creado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $idioma = Idioma::find($id);

        return view('admin.idiomas.show',['idioma' => $idioma]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idioma = Idioma::find($id);

        return view('admin.idiomas.edit',['idioma' => $idioma]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $idioma = Idioma::find($id);
        $idioma->nombre = $request->nombre;
        $idioma->save();

        return redirect()->route('idiomas.index')->with('success','Idioma actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idioma = Idioma::find($id);
        $idioma->delete();

        return redirect()->route('idiomas.index')->with('success','Idioma eliminado con exito!');
    }
}
