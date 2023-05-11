@extends('layouts.app')

@section('contenido')

    <div class="w-[120px]">
        <a href="{{ route('publicaciones.create') }}" class="btn-new flex items-center gap-2 justify-start">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Agregar
        </a>
    </div>

    <div class="mt-8">

        @if ($publicaciones->count() == 0)
            <div class="p-10 bg-white text-xl rounded-lg">
                <p class="text-center">No hay registros!!</p>
            </div>
        @else

            <div class="p-10 bg-white rounded-lg">

                @foreach ($publicaciones as $publicacion )
                    <tr>
                        <td>
                            <div class="flex flex-col gap-4 my-2">
                        
                                <a href="{{ route('publicaciones.show',$publicacion->id) }}" class="bg-white rounded-lg shadow-lg overflow-hidden flex-none flex items-center p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[150px] h-[150px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                    
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
                                </a>
                    
                            </div>
                        </td>
                    </tr>
                @endforeach

            </div>
            
        @endif

    </div>



@endsection