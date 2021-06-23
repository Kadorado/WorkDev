@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


    @if ($userSkills === 'mensaje de error')
        <div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
            <h1 class="mb-10 text-xl text-center text-blue-500 text-bold">Por favor primero completa tus datos</h1>

            <a href="/developerdata">
                <button
                    class="px-8 py-2 mb-8 font-bold text-center text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">Completar
                    perfil</button> </a>
        </div>

    @elseif(count($userSkills)== 0 )
        <div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
            <h1 class="mb-10 text-xl text-center text-blue-500">no haz registrado tu formación acádemica</h1>
            <a href="skills/show">
                <button
                    class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">
                    registrar
                </button> </a>
        </div>
    @else

        <body class="flex items-center justify-center">
            <div>
                <h1 class="text-xl text-center text-blue-500 text-bold mb-2"> Tus habilidades <div class="w-full lg:w-5/6">

            </div>

                    <div class="overflow-x-auto">
                        <div
                            class="min-w-screen bg-white flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                            <div class="w-full lg:w-5/6">
                                <div class="bg-white shadow-md rounded my-6">
                                    <table class=" min-w-max w-full table-auto">
                                        <thead>
                                            <tr class="bg-blue-400 text-white uppercase text-sm leading-normal">
                                                <th class="py-3 px-6 text-left">habilidad</th>
                                                <th class="py-3 px-6 text-left"></th>
                                                <th class="py-3 px-6 text-center"></th>
                                                <th class="py-3 px-6 text-center"></th>
                                                <th class="py-3 px-6 text-center">Acciones</th>
                                            </tr>
                                        </thead>

                                        @foreach ($userSkills as $userSkill)
                                            <tbody class="text-gray-600 text-sm font-light">
                                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="mr-2">
                                                               
                                                            </div>
                                                            <span class="font-medium">{{ $userSkill->skillName }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-6 text-left">

                                                    </td>
                                                    <td class="py-3 px-6 text-center">

                                                    </td>
                                                    <td class="py-3 px-6 text-center">
                                                    </td>
                                                    <td class="py-3 px-6 text-center">
                                                        <div class="flex item-center justify-center">



                                                            <form
                                                                action="{{ route('skills.destroy', $userSkill->skill_id) }}"
                                                                method="POST" id={{ $userSkill->skill_id }}>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    onclick="deleteSkills({{ $userSkill->skill_id }})">
                                                                    <div
                                                                        class="w-5 mr-2 transform hover:text-red-500 hover:scale-110">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
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
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center  mt-4">
                        <a href="skills/show">
                            <button
                                class=" px-4 py-2 mb-2 font-bold  text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-100">Editar</button>
                        </a>
                    </div>
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
        function deleteSkills(id) {

            var formulario = document.getElementById(id);

            Swal.fire({
                title: '¿Estas seguro de querer eliminar esta habilidad?',
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
