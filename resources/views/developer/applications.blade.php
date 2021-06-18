@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<h2 class="text-xl text-center text-blue-500">Tus Aplicaciones</h2></h2>
@if($userApplication=="mensaje de error")
    <h6>Primero debes completar tus datos</h6>
@elseif($userApplication->count()==0)
    <h6>Aún no has aplicado a ninguna oferta</h6>
@else
    @foreach ($userApplication as $ap )
        <h1>{{$ap->Location}}</h1>     
    @endforeach
@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop

