@extends('layouts.app')

@section('contenido')

    <div class="w-[120px]">
        <a href="{{ route('empleador.index') }}" class="btn-new flex justify-start items-center gap-2"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            Regresar
        </a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">

        <p class="mb-4 text-xl font-bold">
            ¿Seguro que quiere eliminar este Empleador?
        </p>

        {{ Aire::open()->route('empleador.destroy',$usuario->id) }}
        
        {{ Aire::input('nombre', 'Nombre')->placeholder('Nombre')->value($usuario->name)->class('bg-gray-100')->disabled(true)  }}
        {{ Aire::input('nombre', 'Email')->placeholder('Nombre')->value($usuario->email)->class('bg-gray-100')->disabled(true)  }}

        <input type="submit" value="Eliminar" class="btn-danger">
        
        {{ Aire::close() }}

    </div>

@endsection