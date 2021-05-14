@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1 class="text-center">Tus vacantes</h1>
<div class="items-center	">
    <a href="vacante/create" class="btn btn-primary">Crear Vacante</a>
</div>

<body class="antialiased font-sans bg-gray-200">
    <div class="container mx-auto px-4 sm:px-8">

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>

                        <tr>

                            <th class=" text-center ">Titulo</th>
                            <th class=" text-center ">Experiencia requerida</th>
                            <th class=" text-center ">Salario</th>
                            <th class=" text-center ">Lugar</th>
                            <th class=" text-center ">Moneda</th>
                            <th class=" text-center ">Description de la vacante</th>
                            <th class=" text-center ">Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($vacantes as $vacante)
                        <tr>
                            <td class= " text-center w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->Title}}
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->ExperienceRequire}}
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->Salary}}
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->Location}}
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->currency}}
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                <span class=" text-justify lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"> {{$vacante->DescriptionVacancy}}</span>
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                {{$vacante->state}}
                                <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">Activa</span>
                            </td>

                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                Acciones
                                <form action="{{ route('vacante.destroy',$vacante->id) }}" method="POST">
                                    <a href="/vacante/{{$vacante->id}}/edit" class=""><i class="fas fa-pencil-alt"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=""><i class="fas fa-trash"></i>
                                        </i></button>
                                </form>
                            </td>
                        </tr>


                        @endforeach

                    </tbody>


                </table>

            </div>
        </div>
    </div>
    </div>
</body>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop