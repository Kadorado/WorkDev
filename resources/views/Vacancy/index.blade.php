
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Nueva vacante</h1>
<a href="vacante/create" class="btn btn-primary">Crear Vacante</a>

<table class="table table-dark table-striped mt-4">
    <thead>

        <tr>

            <th scope="col">Titulo</th>
            <th scope="col">Experiencia requerida</th>
            <th scope="col">Salario</th>
            <th scope="col">Lugar</th>
            <th scope="col">Moneda</th>
            <th scope="col">Description de la vacante</th>
            <th scope="col">Estado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($vacantes as $vacante)
             <tr>
                <td>
                    {{$vacante->Title}}
                </td>
                <td>
                    {{$vacante->ExperienceRequire}}
                </td>
                <td>
                    {{$vacante->Salary}}
                </td>
                <td>
                    {{$vacante->Location}}
                </td>
                <td>
                    {{$vacante->currency}}
                </td>
                <td>
                    {{$vacante->DescriptionVacancy}}
                </td>
                <td>
                    {{$vacante->state}}
                </td>
                <td>
                    <form action="{{ route('vacante.destroy',$vacante->id) }}" method="POST">
                        <a href="/vacante/{{$vacante->id}}/edit" class="btn btn-info">Editar</a>         
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                   </td>
            </tr>


        @endforeach

    </tbody>


</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
