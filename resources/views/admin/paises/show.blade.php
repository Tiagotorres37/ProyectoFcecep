@extends('layouts.app')

@section('contenido')

    <div>
        <a href="{{ route('paises.index') }}" class="btn-new">Regresar</a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">

        <p class="mb-4 text-xl font-bold">
            ¿Seguro que quiere eliminar este Pais?
        </p>

        {{ Aire::open()->route('paises.destroy',$pais->id) }}
        
        {{ Aire::input('nombre', 'Nombre')->placeholder('Nombre')->value($pais->nombre)->class('bg-gray-100')->disabled(true)  }}

        <input type="submit" value="Eliminar" class="btn-danger">
        
        {{ Aire::close() }}

    </div>

@endsection