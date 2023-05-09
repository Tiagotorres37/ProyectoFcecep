<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $epss = Eps::all();

        return view('admin.eps.index',['epss' => $epss]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.eps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $eps = new Eps();
        $eps->nombre = $request->nombre;
        $eps->save();

        return redirect()->route('epss.index')->with('success','Eps creada con exito!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eps = Eps::find($id);

        return view('admin.eps.edit',['eps' => $eps]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $eps = Eps::find($id);
        $eps->nombre = $request->nombre;
        $eps->save();

        return redirect()->route('epss.index')->with('success','Eps actualizada con exito!');
    }

    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        $eps = Eps::find($id);

        return view('admin.eps.show',['eps' => $eps]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eps = Eps::find($id);
        $eps->delete();

        return redirect()->route('epss.index')->with('success','Eps eliminada con exito!');
    }
}
