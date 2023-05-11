@extends('layouts.app')

@section('contenido')

    <div class="w-[120px]">
        <a href="{{ route('publicaciones.index') }}" class="btn-new flex justify-start items-center gap-2"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            Regresar
        </a>
    </div>

    <div class="mt-8 bg-white p-10 rounded-lg">

        <p class="text-center text-3xl font-bold">
            OFERTA DE EMPLEO!!!
        </p>

        <div class="px-6 py-4">
            <div class="font-bold text-2xl mb-2">{{ $publicacion->titulo }}</div>
                
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Descripcion:</label>
                <p class="text-gray-700 text-base pl-2">{{ $publicacion->descripcion }}</p>
            </div>
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Salario:</label>
                <p class="text-gray-700 text-base pl-2">${{ $publicacion->salario }}</p>
            </div>
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Empleador:</label>
                <p class="text-gray-700 text-base pl-2">{{ $publicacion->empleador->name }}</p>
            </div>
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Enviar hoja de vida:</label>
                <p class="text-gray-700 text-base pl-2">{{ $publicacion->empleador->email }}</p>
            </div>

        </div>

    </div>

@endsection