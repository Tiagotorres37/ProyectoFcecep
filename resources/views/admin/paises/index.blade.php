@extends('layouts.app')

@section('contenido')

    <div>
        <a href="{{ route('paises.create') }}" class="btn-new">Agregar</a>
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
              @foreach ($paises as $pais )
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $pais->nombre }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('paises.edit',$pais->id) }}" class="btn-primary">Editar</a>
                    <a href="{{ route('paises.show',$pais->id) }}" class="btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection