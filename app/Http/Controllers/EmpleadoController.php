<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = User::where('rol_id',1)->get();

        return view('empleados.index',['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $empleador = Auth::user();

        $this->validate($request,[
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $empleado = new User();
        $empleado->name = $request->name;
        $empleado->email = $request->email;
        $empleado->password = $request->password;
        $empleado->empleador_id = $empleador->id;
        $empleado->save();

        return redirect()->route('empleados.index')->with('success','Empleado creado con exito!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = User::find($id);

        return view('empleados.show',['empleado'=>$empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = User::find($id);

        return view('empleados.edit',['empleado' => $empleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $empleado = User::find($id);
        $empleado->name = $request->name;
        $empleado->email = $request->email;
        $empleado->password = $request->password;
        $empleado->save();

        return redirect()->route('empleados.index')->with('success','Empleado actualizado con exito!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $empleado = User::find($id);
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success','Empleado eliminado con exito!!');
        
    }
}
