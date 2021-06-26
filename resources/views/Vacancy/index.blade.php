@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')

    @if ($vacantes !== 'mensaje de error')

        <div class=" content-center	 p-4 border-b">
            <div class="text-center">
                <a href="vacante/create">
                    <button
                        class=" flex-0.5 px-4 py-2 m-auto mx-6 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-100"
                        type="button"> Crear vacante</button></a>
            </div>


            <!-- Start of component -->
            @foreach ($vacantes as $vacante)

                <div class="min-h-screen flex items-center justify-center px-4 mb-4 mt-4"> 

                    <div class="max-w-4xl w-full  shadow-xl bg-green-400">

                        <div>
                            <div class="  text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-white">
                                    Titulo
                                </p>
                                <p class="text-white text-bold">
                                    {{ $vacante->Title }}
                                </p>
                            </div>
                            <div class=" text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-white">
                                    Experiencia requerida (meses)
                                </p>
                                <p class="text-white text-bold">
                                    {{ $vacante->ExperienceRequire }} meses
                                </p>
                            </div>
                            <div class=" text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-white">
                                    Salario
                                </p>
                                <p class="text-white text-bold">
                                    {{ $vacante->Salary }} {{ $vacante->currency }}
                                </p>
                            </div>
                            <div class=" text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-white">
                                    Estado
                                </p>
                                <p class="text-white text-bold">
                                    @if ($vacante->state == 0)
                                        Cerrada
                                    @else
                                        Abierta
                                    @endif
                                </p>
                            </div>
                            <div class="text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                                <p class="text-white">
                                    Descripción de la vacante
                                </p>
                                <p class="text-white text-bold">
                                    {{ $vacante->DescriptionVacancy }}
                                </p>
                            </div>


                            <div class=" text-bold md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 ">
                                <p class="text-white text-bold">
                                    Acciones
                                </p>
                                
                                    <div class=" flex items-center p-2 rounded justify-between space-x-2">
                                        <form action="{{ route('vacante.destroy', $vacante->id) }}" method="POST"
                                            id={{ $vacante->id }}>
                                            <a href="/vacante/{{ $vacante->id }}/edit"
                                                class="bg-green text-white font-bold py-2 px-4 rounded  cursor-not-allowed"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="DeleteVacancy({{ $vacante->id }})"
                                                class="bg-red text-white font-bold py-2 px-4 rounded  cursor-not-allowed"><i
                                                    class="fas fa-trash outline-none"></i>
                                                </i></button>
                                        </form>

                                        <button class="bg-green text-white font-bold py-2 px-4 rounded  cursor-not-allowed">
                                            <a href="/candidates/{{ $vacante->id }}">Candidatos</a>
                                        </button>
                                    </div>
                                
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End of component -->
            @endforeach
        @else
            <div class="text-center">
                <h1 class="text-center text-green text-xl  text-bold mb-8">LLena tus datos antes de crear una vacante</h1>
                <p class="text-center text-green text-xl text-bold mb-8">
                    Completa los datos para que puedas crear convocatorias y recibir los mejores perfiles
                    
                    <br />
                    <br />
                    <a class="text-pink-500 underline" href="https://undraw.co/"></a>
                </p>




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
