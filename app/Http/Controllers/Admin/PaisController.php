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
            'nombre' => 'required|min:5|max:25'
        ]);

        $pais = new Pais();
        $pais->nombre = $request->nombre;
        $pais->save();

        return redirect()->route('paises.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pais $pais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pais $pais)
    {
        //
    }
}
