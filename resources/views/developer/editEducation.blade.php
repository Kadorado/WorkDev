@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


@if($education === "mensaje de error")
<h2>por favor primero completa tus datos</h2>
<a href="/developerdata">Completar perfil</a>
@elseif(count($education)== 0 )
<h1>no haz registrado tu formación acádemica</h1>
<a href="education/edit">registrar</a>
@else

<form action="">
    <select>

        @foreach ($education as $edu)
            <option value={{ $edu }}>{{ $edu}}</option>
        @endforeach
        
    </select>
    <select>

        @foreach ($level as $lev)
            <option value={{ $lev }}>{{ $lev }}</option>
        @endforeach
        
    </select>
</form>



@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop