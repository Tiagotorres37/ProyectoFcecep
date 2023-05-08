@extends('layouts.app')

@section('contenido')

    <div class="w-[120px]">
        <a href="{{ route('departamentos.index') }}" class="btn-new flex justify-start items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
              
            Regresar
        </a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">
        
        {{ Aire::open()->route('departamentos.store') }}
        
        {{ Aire::input('nombre', 'Nombre')->placeholder('Nombre')  }}


        @if ($paises->count() == 0)
            <p class="mb-2">No existe ningun pais para ser seleccionado, No se puede crear un departamento.</p>
        @else
            {{ Aire::select($paises->pluck('nombre', 'id'), 'pais_id', 'Pais') }}

        @endif

        <input type="submit" value="Crear" class="btn {{ $paises->count() == 0 ? 'btn-disabled' : 'btn-success' }}" {{ $paises->count() == 0 ? 'disabled' : '' }}>
        
        {{ Aire::close() }}

    </div>

@endsection