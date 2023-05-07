@extends('layouts.app')

@section('contenido')

    <div>
        <a href="{{ route('paises.index') }}" class="btn-new">Regresar</a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">
        {{ Aire::open()->route('paises.store') }}
        
        {{ Aire::input('nombre', 'Nombre')->placeholder('Nombre')  }}

        <input type="submit" value="Crear" class="btn-success">
        
        {{ Aire::close() }}

    </div>

@endsection