<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FondoPension;
use Illuminate\Http\Request;

class FondoPensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos_pension = FondoPension::all();

        return view('admin.pensiones.index',['fondos_pension' => $fondos_pension]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pensiones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $pension = new FondoPension();
        $pension->nombre = $request->nombre;
        $pension->save();

        return redirect()->route('pensiones.index')->with('success','Fondo de pension creado con exito!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pension = FondoPension::find($id);

        return view('admin.pensiones.edit',['pension' => $pension]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $pension = FondoPension::find($id);
        $pension->nombre = $request->nombre;
        $pension->save();

        return redirect()->route('pensiones.index')->with('success','Fondo de pension actualizado con exito!');
    }

    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        $pension = FondoPension::find($id);

        return view('admin.pensiones.show',['pension' => $pension]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pension = FondoPension::find($id);
        $pension->delete();

        return redirect()->route('pensiones.index')->with('success','Fondo de pension eliminado con exito!');
    }
}
