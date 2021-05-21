
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<div class="min-h-screen bg-gray-200 flex justify-center items-center">
  <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
     <div id="header" class="flex">


<form class="w-full max-w-lg" action="{{ route('recruiter.store') }}" method="POST">
    @csrf
  <div class="flex flex-wrap -mx-3 mb-6">
    <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">NameCompany</label>
    <input id="namecompany" name="namecompany" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Website</label>
    <input id="website" name="website" type="url" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NitCompany</label>
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
    <script> console.log('Hi!'); </script>
@stop

