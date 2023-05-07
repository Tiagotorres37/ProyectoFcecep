@extends('layouts.app')

@section('contenido')

    <div>
        <a href="{{ route('paises.index') }}" class="btn-new">Regresar</a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">
        {{ Aire::open()->route('paises.update',$pais->id) }}
        
        {{ Aire::input('nombre', 'Nombre')->placeholder('Nombre')->value($pais->nombre)  }}

        <input type="submit" value="Actualizar" class="btn-success">
        
        {{ Aire::close() }}

    </div>

@endsection