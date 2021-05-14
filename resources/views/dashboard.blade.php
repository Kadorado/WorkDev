@extends('adminlte::page')



@section('title', 'Dashboard')


@section('content')




@if (Auth::user()->hasRole('Developer'))
    <h1>Hola soy dev</h1>
@elseif (Auth::user()->hasRole('Recruiter'))
    <h1>Hola soy empresa</h1>
    <h2>Por favor llena tus datos personales antes de publicar tus vacantes</h2>
@elseif (Auth::user()->hasRole('Admin'))
    <h1>Hola soy admin</h1>
@endif



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

