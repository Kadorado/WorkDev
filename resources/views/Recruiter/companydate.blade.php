
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')


@if (sizeof($users) !== 0)
  <h1>Editar Datos Empresa</h1>
  <form action="/companydata/{{$users[0]->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label py-6">NameCompany</label>
    <input id="namecompany" name="namecompany" type="text" class="form-control" tabindex="1" value ="{{$users[0]->NameCompany}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value ="{{$users[0]->DescriptionCompany}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Website</label>
    <input id="website" name="website" type="url" class="form-control" tabindex="3" value ="{{$users[0]->WebsiteCompany}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NitCompany</label>
    <input id="nitcompany" name="nitcompany" type="text"  class="form-control" tabindex="3" value ="{{$users[0]->idCompany}}">
  </div>
  <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
</form>

@else
  <form action="{{ route('companydata.store') }}" method="POST">
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
@endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

