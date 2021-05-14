@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<form action="{{ route('developer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="fullName" class="form-label py-6">Nombre Completo</label>
    <input id="fullName" name="fullName" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="experience" class="form-label">Experiencia en meses</label>
    <input id="experience" name="experience" type="number" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="about_me" class="form-label">Perfil</label>
    <input id="about_me" name="about_me" type="text" placeholder="cuentanos brevemente sobre ti" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="about_me" class="form-label">Perfil</label>
    <input id="country" name="country" type="text" placeholder="pais" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="curriculum" class="form-label">curriculum</label>
    <input id="curriculum" name="curriculum" type="file" accept="application/pdf", class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="github" class="form-label">Perfil de github</label>
    <input id="github" name="github" type="url" class="form-control" tabindex="3">
  </div>
  <a href="/dashboard" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@if($developer ?? '')
<p>{{$developer ?? ''['fullName']}}</p>
@else
<p>NO hay desarrollador </p>
@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

