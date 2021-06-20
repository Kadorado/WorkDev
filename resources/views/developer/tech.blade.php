@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>



@if($userTecno === "mensaje de error")
<h2>por favor primero completa tus datos</h2>
<a href="/developerdata">Completar perfil</a>
@elseif(count($userTecno)== 0 )
<h1>no haz registrado tus tecnologias</h1>
<form action={{route('tecnologies.store')}} method="POST"> 
    @csrf
    <select id="tech" name="tech" required>
        @foreach ($tecnologies as $tecno)
            <option value="{{ $tecno->id }}">{{ $tecno->tecno }}</option>
        @endforeach
        
    </select>

    <input type="submit" value="guardar">
</form>

@else

<table class="min-w-full">
    <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tecnologia</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Eliminar</th>
  
        </tr>
    </thead>
    <tbody class="bg-white">
        @foreach ($userTecno as $tec)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                <div class="flex items-center">
                    <div>
                        <div class="text-sm leading-5 text-gray-800">{{ $tec->tecno }}</div>
                    </div>
                </div>
            </td>

            
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                <form action="{{route ('tecnologies.destroy', $tec->tecnology_id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                        eliminar
                    </button>
                {{-- </a> --}}
            </form>
                
            </td>
              </tr>  
              @endforeach
    </tbody>
</table>
{{-- form añadir educacion --}}
<form action={{route('tecnologies.store')}} method="POST"> 
    @csrf
    <select id="tech" name="tech" required>
        @foreach ($tecnologies as $tecno)
            <option value="{{ $tecno->id }}">{{ $tecno->tecno }}</option>
        @endforeach
        
    </select>

    <input type="submit" value="guardar">
</form>

@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop