@extends('layouts.app')

@section('contenido')

    <div>
        <a href="{{ route('departamentos.create') }}" class="btn-new">Agregar</a>
    </div>

    <div class="mt-8">
        <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              
            </tbody>
          </table>
    </div>
@endsection