<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();

        return view('admin.usuarios.index',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|min:3|max:25|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success','Usuario creado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);

        return view('admin.usuarios.show',['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);
        $roles = Rol::all();
        $empleadores = User::where('rol_id',2)->get();


        return view('admin.usuarios.edit',['usuario' => $usuario,'roles' => $roles,'empleadores' => $empleadores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|min:3|max:25|confirmed',
            'rol_id' => 'required|numeric',
            'empleador_id' => 'required|numeric'

        ]);

        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->rol_id = $request->rol_id;
        $usuario->empleador_id = $request->empleador_id;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success','Usuario actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success','Usuario eliminado con exito!');
    }
}
