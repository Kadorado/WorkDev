@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h2>Crear Vacante</h2>

<form action="/vacante" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Titulo</label>
        <input type="text" name="title" id="title"  type="text" class="form-control" tabindex="1"  >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Experiencia requerida</label>
        <input type="text" name="experience" id="title"  type="number" class="form-control" tabindex="1"  >
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Salario</label>
        <input type="text" name="salary" id="title"  type="number" class="form-control" tabindex="1"  >
    </div> 

    <div class="mb-3">
        <label for="" class="form-label">Lugar</label>
        <input type="text" name="location" id="title"  type="texto" class="form-control" tabindex="1"  >
    </div> 


    <div class="mb-3">
        <label for="" class="form-label">Moneda</label>
        <input type="text" name="currency" id="title"  type="text" class="form-control" tabindex="1"  >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion de la vacante</label>
        <input type="text" name="descriptionjob" id="title"  type="number" class="form-control" tabindex="1"  >
    </div> 


    <div class="mb-3">
        <label for="" class="form-label">estado</label>
        <input type="text" name="state" id="title"  type="texto" class="form-control" tabindex="1"  >
    </div> 

    <a href="/vacante" class="btn btn-secondary" tabindex="">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
