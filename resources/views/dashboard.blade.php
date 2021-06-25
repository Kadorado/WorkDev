@extends('adminlte::page')



@section('title', 'Dashboard')


@section('content')


    <body class="leading-normal overflow-hidden tracking-normal text-white gradient"
        style="font-family: 'Source Sans Pro', sans-serif;">
        <div class="pt-24 overflow-hidden">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">


                    @if (Auth::user()->hasRole('Developer'))


                        <h1 class='text-center text-blue text-bold '>¡Bienvenido Desarrollador!</h1>
                        <p class=" text-bold text-blue text-center leading-normal text-2xl mb-8">
                            Bienvenido a la mejor plataforma para aplicar a propuestas laborales del mundo del desarrollo
                        </p>


                </div>

            </div>
        </div>

        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">

                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-5/6 sm:w-1/2 p-6">
                        <h3 class=" text-blue text-center text-3xl text-gray-800 font-bold leading-none mb-3">
                            Primero debes completar tu perfil
                        </h3>

                        <div class="w-full object-center text-center">
                            <img src="{{ asset('favicons/illustration9.svg') }}"  height="410px" alt="panel-main">
                        </div>




                    @elseif (Auth::user()->hasRole('Recruiter'))

                        <div class="overflow-y-hidden">

                            <h1 class="text-green text-bold">¡Bienvenido Empresa!</h1>
                            <p class="leading-normal text-3xl mb-8 text-green text-bold">
                                Bienvenido a la mejor plataforma para ofertar vacantes laborales del mundo del desarrollo
                            </p>
                            <p class="text-green text-bold">Antes de avanzar por favor completa tu perfil</p>
                        </div>

                        <div class="w-full object-center text-center">
                            <img src="https://peaku.co/img/business/illustration7.svg" height="410px" alt="panel-main">
                        </div>


                    </div>

                </div>
            </div>
        </section>


    @elseif (Auth::user()->hasRole('Admin'))
        <h1>¡Hola Querido admin!</h1>
        @endif<a class="text-pink-500 underline" href="https://undraw.co/"></a>



    </body>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    


@stop

@section('js')
@stop
