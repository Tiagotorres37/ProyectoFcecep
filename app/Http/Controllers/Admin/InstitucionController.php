<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instituciones = Institucion::all();

        return view('admin.instituciones.index',['instituciones' => $instituciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instituciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $institucion = new Institucion();
        $institucion->nombre = $request->nombre;
        $institucion->save();

        return redirect()->route('instituciones.index')->with('success','Institucion creada con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $institucion = Institucion::find($id);

        return view('admin.instituciones.show',['institucion' => $institucion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $institucion = Institucion::find($id);

        return view('admin.instituciones.edit',['institucion' => $institucion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $institucion = Institucion::find($id);
        $institucion->nombre = $request->nombre;
        $institucion->save();

        return redirect()->route('instituciones.index')->with('success','Institucion creada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institucion = Institucion::find($id);
        $institucion->delete();

        return redirect()->route('instituciones.index')->with('success','Institucion creada con exito!');
    }
}
