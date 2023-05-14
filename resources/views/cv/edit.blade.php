@extends('layouts.app')

@section('contenido')

    <div class="flex justify-between">
        @if (Auth::user()->rol_id != 1)
            <a href="{{ route('usuarios.index') }}" class="btn-new flex justify-start items-center gap-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
                Regresar
            </a>
        @endif

        <a href="{{ route('cv.show',$usuario->id) }}" class="btn-second flex justify-start items-center gap-2"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
            </svg>
            Ver 
        </a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">
        {{ Aire::open()->route('cv.update',$usuario->id) }}
        
        {{ Aire::date('fecha_de_nacimiento', 'Fecha de nacimiento')->value($usuario->fecha_de_nacimiento)  }}
        {{ Aire::textarea('descripcion', 'Sobre mi')->placeholder('descripcion')->value($usuario->descripcion)  }}

        {{ Aire::select($ciudades->pluck('nombre', 'id'), 'ciudad_id', 'Ciudad')->value($usuario->ciudad_id) }}

        {{ Aire::select($documentos->pluck('nombre', 'id'), 'documento_id', 'Documento')->value($usuario->documento_id) }}
        {{ Aire::input('documento_numero', 'Numero de documento')->placeholder('0')->value($usuario->documento_numero)  }}

        {{ Aire::select($epss->pluck('nombre', 'id'), 'eps_id', 'Eps')->value($usuario->eps_id) }}

        {{ Aire::select($fondosPension->pluck('nombre', 'id'), 'fondos_pension_id', 'Fondo de pension')->value($usuario->fondos_pension_id) }}
       
        {{ Aire::select($instituciones->pluck('nombre', 'id'), 'institucion_id', 'Institucion')->value($usuario->institucion_id) }}
        
        {{ Aire::select($idiomas->pluck('nombre', 'id'), 'idioma_id', 'Idioma')->value($usuario->idioma_id) }}

        <input type="submit" value="Actualizar" class="btn-success">
        
        {{ Aire::close() }}

    </div>

@endsection