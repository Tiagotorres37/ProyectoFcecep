<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function dashboard(Request $request)
    {
        $publicaciones = Publicacion::when($request->filled('q'), function ($q) use ($request){
            $q->where('titulo','LIKE','%'.$request->q.'%')
            ->orWhere('descripcion','LIKE','%'.$request->q.'%')
            ->orWhere('salario','=',$request->q);
        })->get();

        return view('public.dashboard',['publicaciones' => $publicaciones]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.empleador');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
