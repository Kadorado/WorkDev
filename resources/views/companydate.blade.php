
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<form action="/dashboard" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label py-6">NameCompany</label>
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



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

