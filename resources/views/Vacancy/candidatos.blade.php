@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    @if ($candidates->count()==0)
        <h3>Aún no hay candidatos para esta vacante</h3>
    @else
        @foreach ($candidates as $candidate )
            
            
        @endforeach   
    @endif
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

@stop