@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>



    @if ($userEducation === 'mensaje de error')
        <div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
            <h1 class="mb-10 text-xl text-center text-bold text-blue-500">por favor primero completa tus datos</h1>

            <a href="/developerdata">
                <button
                    class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">Completar
                    perfil</button> </a>
        </div>

    @elseif(count($userEducation)== 0 )
        <div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
            <h1 class="mb-10 text-xl text-center text-blue-500 text-bold ">no has registrado tu formación académica</h1>
           
        </div>


        <form action={{ route('education.store') }} method="POST">
            @csrf
            <div class="flex flex-row flex-wrap">
                <select id="career" name="career" required
                    class="flex-1 block p-2 mx-2 mt-1 bg-white border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @foreach ($education as $edu)
                        <option value="{{ $edu }}">{{ $edu }}</option>
                    @endforeach

                </select>
                <select id="level" name="level" required
                    class="flex-1 block w-1/2 p-2 mx-2 mt-1 bg-white border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @foreach ($level as $lev)
                        <option value="{{ $lev }}">{{ $lev }}</option>
                    @endforeach
                </select>
                <input type="submit" value="guardar"
                    class="flex-0.5 px-4 py-2 m-auto mx-6 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">
            </div>
        </form>
    @else
        {{-- tabla fea :C --}}


        <body class="flex items-center justify-center">

            <div class="overflow-x-auto">
                {{-- form añadir educacion --}}
                <form action="{{ route('education.store') }}" method="POST" class="my-6">
                    <h1 class="text-xl text-center text-blue-500 text-bold mb-2">Agrega contenido a tu perfil
                    </h1>
                    @csrf
                    <div class="flex flex-row flex-wrap">
                        <select id="career" name="career" required
                            class="flex-1 block p-2 mx-2 mt-1 bg-white border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($education as $edu)
                                <option value="{{ $edu }}">{{ $edu }}</option>
                            @endforeach
                        </select>

                        <select id="level" name="level" required
                            class="flex-1 block p-2 mx-2 mt-1 bg-white border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($level as $lev)
                                <option value="{{ $lev }}">{{ $lev }}</option>
                            @endforeach
                        </select>
                        <button
                            class="flex-0.5 px-4 py-2 m-auto mx-6 font-bold text-blue-600 transition duration-300 ease-in-out transform bg-blue-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-blue-400 hover:text-white hover:scale-100"
                            type="submit"> Agregar</button>
                    </div>
                </form>

                <div
                    class=" bg-white min-w-screen   flex items-center justify-center font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-blue-400 text-white uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Carrera</th>
                                        <th class="py-3 px-6 text-left">NIvel</th>
                                        <th class="py-3 px-6 text-center"></th>
                                        <th class="py-3 px-6 text-center"></th>
                                        <th class="py-3 px-6 text-center">Acciones</th>
                                    </tr>
                                </thead>

                                @foreach ($userEducation as $userEdu)
                                    <tbody class="text-gray-600 text-sm font-light">
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                <div class="flex items-center">

                                                    <span class="font-medium"> {{ $userEdu->nameEducation }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-center">

                                                    <span>{{ $userEdu->level }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center">

                                            </td>
                                            <td class="py-3 px-6 text-center">
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">


                                                    <form
                                                        action="{{ route('education.destroy', $userEdu->education_id) }}"
                                                        method="POST" id={{ $userEdu->education_id }}>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            onclick="deleteEducation({{ $userEdu->education_id }})">
                                                            <div
                                                                class="w-5 mr-2 transform hover:text-red-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </button>

                                                    </form>



                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
        </body>



        <style>
            html,
            body {
                height: 100%;
            }

            @media (min-width: 640px) {
                table {
                    display: inline-table !important;
                }

                thead tr:not(:first-child) {
                    display: none;
                }
            }

            td:not(:last-child) {
                border-bottom: 0;
            }

            th:not(:last-child) {
                border-bottom: 2px solid rgba(0, 0, 0, .1);
            }

        </style>


    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script>
        function deleteEducation(id) {

            var formulario = document.getElementById(id);

            Swal.fire({
                title: '¿Estas seguro de querer eliminar esta educación?',
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
                            'Esta habilidad ha sido eliminada.',
                            'success'
                        ), formulario.submit()
                    }
                }

            )


        }

    </script>


@stop
