<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;
use DB;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ciudades = Ciudad::all();

        return view('admin.ciudades.index',['ciudades' => $ciudades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $departamentos = Departamento::all();

        return view('admin.ciudades.create',['departamentos' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25',
            'departamento_id' => 'required'
        ]);

        $ciudad = new Ciudad();
        $ciudad->nombre = $request->nombre;
        $ciudad->departamento_id = $request->departamento_id;
        $ciudad->save();

        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
