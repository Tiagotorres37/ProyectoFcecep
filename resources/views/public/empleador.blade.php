@extends('layouts.app')

@section('contenido')

    <div class="p-10 bg-white rounded-lg">

        <p class="text-xl font-bold mt-4">
            Gestion de Personal.
        </p>

        <div class="flex flex-row gap-4 my-2">
            
            <a href="{{ route('usuarios.index') }}" class="bg-white rounded-lg shadow-lg overflow-hidden flex-none w-1/3 flex items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                  
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Usuarios</div>
                    <p class="text-gray-700 text-base">Gestion de usuarios</p>
                </div>
            </a>

            <a href="{{ route('empleados.index') }}" class="bg-white rounded-lg shadow-lg overflow-hidden flex-none w-1/3 flex items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                  
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Empleados</div>
                  <p class="text-gray-700 text-base">Gestion de empleados</p>
                </div>
            </a>

        </div>

        <p class="text-xl font-bold mt-4">
            Gestion de Publicaciones.
        </p>

        <div class="flex flex-row gap-4 my-2">
            
            <a href="{{ route('publicaciones.index') }}" class="bg-white rounded-lg shadow-lg overflow-hidden flex-none w-1/3 flex items-center p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>
                  
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Publicaciones</div>
                    <p class="text-gray-700 text-base">Gestion de publicaciones</p>
                </div>
            </a>

        </div>


    </div>

@endsection