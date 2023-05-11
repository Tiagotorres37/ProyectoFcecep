@extends('layouts.app')

@section('contenido')

    <div class="w-[120px]">
        <a href="{{ route('empleados.index') }}" class="btn-new flex justify-start items-center gap-2"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            Regresar
        </a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">
        {{ Aire::open()->route('empleados.update',$empleado->id) }}
        
        {{ Aire::input('name', 'Nombre')->placeholder('Nombre')->value($empleado->name)  }}
        {{ Aire::input('email', 'Email')->placeholder('Email')->value($empleado->email)  }}
        {{ Aire::input('password', 'Contraseña')->type('password')->placeholder('Contraseña')  }}
        {{ Aire::input('password_confirmation', 'Confirmar Contraseña')->type('password')->placeholder('Contraseña')  }}

        <input type="submit" value="Actualizar" class="btn-success">
        
        {{ Aire::close() }}

    </div>

@endsection