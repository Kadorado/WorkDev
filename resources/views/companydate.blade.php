
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Sweetalert2', true)

@section('content')

<div class="min-h-screen bg-gray-200 flex justify-center items-center">
  <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
     <div id="header" class="flex">


<form  action="{{ route('recruiter.store') }}" method="POST">
    @csrf
  <div class="relative w-full mb-3 text-xl">
    <small class=" text-center p-2 text-white">* Nombre compañia</small>    
    <input id="namecompany" name="namecompany" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="relative w-full mb-3 text-xl">
    <small class="p-2 text-white">* Descripción</small>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="relative w-full mb-3 text-xl">
    <small class="p-2 text-white">* Website</small>
    <input id="website" name="website" type="url" class="form-control" tabindex="3">
  </div>
  <div class="relative w-full mb-3 text-xl">
    <small class="p-2 text-white">* NIT</small>
    <input id="nitcompany" name="nitcompany" type="text"  class="form-control" tabindex="3">
  </div>
  <a href="/dashboard" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

</div>
</div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
  )
  
  </script>
  @stop
@stop

