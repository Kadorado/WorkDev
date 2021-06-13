@extends('adminlte::page')



@section('title', 'Dashboard')


@section('content')
    </head>

    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">



        <div class="pt-24">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">


                    @if (Auth::user()->hasRole('Developer'))


                        <h1 class='text-center'>¡Bienvenido Desarrollador!</h1>
                        <p class=" text-centerleading-normal text-2xl mb-8">
                            Bienvenido a la mejor plataforma para aplicar a propuestas laborales del mundo del desarrollo
                        </p>

                </div>

            </div>
        </div>

        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    ¿Como Funciona?
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class="text-center text-3xl text-gray-800 font-bold leading-none mb-3">
                            Primero debes completar tu perfil
                        </h3>
                        <p class="text-center text-gray-600 mb-8">
                            llena los datos como desarrollad@r para que puedas aplicar a convocatorias
                            en el slider del lado izquierdo podras encontrar el formulario para realizar este importante
                            paso
                            <br />
                            <br />

                        @elseif (Auth::user()->hasRole('Recruiter'))

                        <div class="overflow-y-hidden">

                            <h1>¡Bienvenido Empresa!</h1>
                            <p class="leading-normal text-2xl mb-8 ">
                                Bienvenido a la mejor plataforma para ofertar vacantes laborales del mundo del desarrollo
                            </p>
                            <p>Antes de avanzar por favor completa tu perfil</p>
                        </div>

                    </div>

                </div>
            </div>


        @elseif (Auth::user()->hasRole('Admin'))
            <h1>¡Hola Querido admin!</h1>
            @endif<a class="text-pink-500 underline" href="https://undraw.co/"></a>

            <div class="w-full object-center text-center">
                <img src="https://peaku.co/img/business/illustration9.svg" height="500px" width="60%" alt="panel-main">
            </div>

            <!-- Calendar Icon -->


        @stop



        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">


        @stop

        @section('js')
            <script>
                console.log('Hi!');

            </script>
        @stop
