<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Documento;
use App\Models\Eps;
use App\Models\FondoPension;
use App\Models\Idioma;
use App\Models\Institucion;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class CvController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);

        return view('cv.index',['usuario' => $usuario]);
    }

    public function cv($id){

        $usuario = User::find($id);

        $context = compact('usuario');

        $cv = PDF::loadView('cv/cv',$context);

        return $cv->setPaper('A4','landscape')->download('cv.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);

        $ciudades = Ciudad::all();
        $documentos = Documento::all();
        $epss = Eps::all();
        $fondosPension = FondoPension::all();
        $instituciones = Institucion::all();
        $idiomas = Idioma::all();

        return view('cv.edit',[
            'usuario' => $usuario,
            'ciudades' => $ciudades,
            'documentos' => $documentos,
            'epss' => $epss,
            'fondosPension' => $fondosPension,
            'instituciones' => $instituciones,
            'idiomas' => $idiomas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'ciudad_id' => 'required',
            'institucion_id' => 'required',
            'eps_id' => 'required',
            'fondos_pension_id' => 'required',
            'idioma_id' => 'required',
            'documento_id' => 'required',
            'documento_numero' => 'required',
            'fecha_de_nacimiento' => 'required',
            'descripcion' => 'required|min:3|max:255'
        ]);

        $usuario = User::find($id);
        $usuario->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $usuario->documento_id = $request->documento_id;
        $usuario->documento_numero = $request->documento_numero;
        $usuario->descripcion = $request->descripcion;
        $usuario->ciudad_id = $request->ciudad_id;
        $usuario->institucion_id = $request->institucion_id;
        $usuario->idioma_id = $request->idioma_id;
        $usuario->eps_id = $request->eps_id;
        $usuario->fondos_pension_id = $request->fondos_pension_id;
        $usuario->save();

        return redirect()->route('cv.show',$usuario->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
