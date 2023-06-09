<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentos = Documento::all();

        return view('admin.documentos.index',['documentos' => $documentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $documento = new Documento();
        $documento->nombre = $request->nombre;
        $documento->save();

        return redirect()->route('documentos.index')->with('success','Documento creado con exito!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $documento = Documento::find($id);

        return view('admin.documentos.edit',['documento' => $documento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:25'
        ]);

        $documento = Documento::find($id);
        $documento->nombre = $request->nombre;
        $documento->save();

        return redirect()->route('documentos.index')->with('success','Documento actualizado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $documento = Documento::find($id);
        
        return view('admin.documentos.show',['documento' => $documento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $documento = Documento::find($id);
        $documento->delete();

        return redirect()->route('documentos.index')->with('success','Documento eliminado con exito!');
    }
}
