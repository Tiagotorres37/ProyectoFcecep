<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pais;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = DB::select('select * from paises');

        return view('admin.paises.index',['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25|unique:paises'
        ]);

        $pais = new Pais();
        $pais->nombre = $request->nombre;
        $pais->save();

        return redirect()->route('paises.index')->with('success','Pais creado con exito!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $pais = Pais::find($id);

        return view('admin.paises.edit',['pais' => $pais]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $pais = Pais::find($id);
        $pais->nombre = $request->nombre;
        $pais->save();

        return redirect()->route('paises.index')->with('success','Pais actualizado con exito!');
    }

        /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pais = Pais::find($id);

        return view('admin.paises.show',['pais' => $pais]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();

        return redirect()->route('paises.index')->with('success','Pais eliminado con exito!');
    }
}
