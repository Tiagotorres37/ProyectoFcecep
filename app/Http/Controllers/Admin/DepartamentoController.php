<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::all();

        return view('admin.departamentos.index',['departamentos' => $departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();

        return view('admin.departamentos.create',['paises' => $paises]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25',
            'pais_id' => 'required'
        ]);

        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->pais_id = $request->pais_id;
        $departamento->save();

        return redirect()->route('departamentos.index')->with('success','Departamento creado con exito!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departamento = Departamento::find($id);
        $paises = Pais::all();

        return view('admin.departamentos.edit',['departamento' => $departamento, 'paises' => $paises]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25',
            'pais_id' => 'required'
        ]);

        $departamento = Departamento::find($id);
        $departamento->nombre = $request->nombre;
        $departamento->pais_id = $request->pais_id;
        $departamento->save();

        return redirect()->route('departamentos.index')->with('success','Departamento actualizado con exito!');
    }

        /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $departamento = Departamento::find($id);

        return view('admin.departamentos.show',['departamento' => $departamento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        return redirect()->route('departamentos.index')->with('success','Departamento eliminado con exito!');
    }
}
