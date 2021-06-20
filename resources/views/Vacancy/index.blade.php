@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')

    @if ($vacantes !== 'mensaje de error')

        <div class=" content-center	 p-4 border-b">
            <div class="text-center">
                <a href="vacante/create"
                    class="justify-center w-32 p-3 mx-6 text-white bg-green-600 rounded-lg shadow outline-none focus:bg-green-700 hover:bg-green-500">Crear
                    Vacante</a>
            </div>

            <!-- Start of component -->
            @foreach ($vacantes as $vacante)

                <div class="min-h-screen flex items-center justify-center px-4 mb-4 mt-4">

                    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">

                        <div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-gray-600">
                                    Titulo
                                </p>
                                <p>
                                    {{ $vacante->Title }}
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-gray-600">
                                    Experiencia requerida (meses)
                                </p>
                                <p>
                                    {{ $vacante->ExperienceRequire }} meses
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-gray-600">
                                    Salario
                                </p>
                                <p>
                                    {{ $vacante->Salary }} {{ $vacante->currency }}
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-gray-600">
                                    Estado
                                </p>
                                <p>
                                    @if ($vacante->state == 0)
                                        Cerrada
                                    @else
                                        Abierta
                                    @endif
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-gray-600">
                                    Descripción de la vacante
                                </p>
                                <p>
                                    {{ $vacante->DescriptionVacancy }}
                                </p>
                            </div>


                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 ">
                                <p class="text-gray-600">
                                    Acciones
                                </p>
                                <div class="space-y-2">
                                    <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                        <form action="{{ route('vacante.destroy', $vacante->id) }}" method="POST"
                                            id={{$vacante->id}}>
                                            <a href="/vacante/{{ $vacante->id }}/edit"
                                                class="text-grey-lighter font-bold py-2 px-4 rounded text-xs bg-green hover:bg-green-dark"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="DeleteVacancy({{$vacante->id}})"
                                                class="text-grey-lighter  font-bold py-2 px-4 rounded text-xs bg-red hover:bg-red-dark"><i
                                                    class="fas fa-trash outline-none"></i>
                                                </i></button>
                                        </form>
                                        <a href="/candidates/{{ $vacante->id }}">Candidatos</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End of component -->
            @endforeach
        @else
            <div class="text-center">
                <h1 class="text-center text-black-600 mb-8">LLena tus datos antes de crear una vacante</h1>
                <p class="text-center text-black-600 mb-8">
                    Completa los datos para que puedas crear convocatorias y recibir los mejores perfiles
                    en el slider del lado izquierdo podras encontrar el formulario para realizar este importante paso en el
                    icono de edificio
                    adelante genera empleo y construye el mejor equipo
                    <br />
                    <br />
                    <a class="text-pink-500 underline" href="https://undraw.co/"></a>
                </p>

                <img src="https://peaku.co/img/business/illustration9.svg" height="500px" width="60%" alt="panel-main" />


            </div>

        </div>
    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">

@stop


@section('js')
    <script>
        function DeleteVacancy(id) {
        var formulario = document.getElementById(id);
            Swal.fire({
                title: '¿Estas seguro de querer eliminar esta vacante?',
                text: "¡No podras revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si,Eliminar!',
                cancelButtonText: "Cancelar"
            }).then((result) => {

                    confirmation = result.value
                    if (confirmation === true) {

                        swal.fire(
                            'Eliminada!',
                            'Tu vacante ha sido eliminada.',
                            'success'
                        )   
                        formulario.submit();


                    }
                }

            )


        }

    </script>
@stop
