@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')


    @if ($userApplication == 'mensaje de error')

        <div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
            <h1 class="mb-10 text-xl text-center text-bold text-blue-500">por favor primero completa tus datos</h1>

            <a href="/developerdata">
                <button
                    class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">Completar
                    perfil</button> </a>
        </div>


    @elseif($userApplication->count()==0)
        <h6 class="text-xl text-center text-blue-500 text-bold mb-2">Aún no has aplicado a ninguna oferta</h6>
    @else
        <h2 class="text-xl text-center text-blue-500 text-bold mb-2">Tus postulaciones</h2>
        @foreach ($userApplication as $ap)
            <div class="lg:flex shadow rounded-lg border  bg-blue-400 border-white mb-2">
                <div class="bg-blue-600 rounded-lg lg:w-2/12 py-1 bg-blue-400 block h-full shadow-inner">
                    <div class="text-center tracking-wide">
                        @if ($ap->profile_photo_path !== null)
                            @php
                                $path_photo_2 = 'storage/' . $ap->profile_photo_path;
                            @endphp
                        @else
                            @php
                                $path_photo_2 = 'favicons/favicon.png';
                            @endphp
                        @endif
                        <img src="{{ asset($path_photo_2) }}" class="relative z-10 object-cover m-auto w-96 h-96"
                            alt="logo de la empresa">
                    </div>
                </div>
                <div class="w-full bg-blue-400 lg:w-11/12 xl:w-full px-1 py-5 lg:px-2 lg:py-2 tracking-wide">
                    <div class="flex flex-row lg:justify-start justify-center">
                        <div class="text-white font-medium text-sm text-center lg:text-left px-2">
                            <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($ap->created_at)->diffForHumans() }}
                        </div>
                        <div class="text-white font-bold font-medium text-sm text-center lg:text-left px-2">
                            Compañia : {{ $ap->NameCompany }}
                        </div>
                    </div>
                    <div class=" uppercase font-semibold text-white text-l text-center lg:text-left px-2">
                        {{ $ap->Title }}
                    </div>
                    <div class="text-white font-medium text-sm pt-1 text-center lg:text-left px-2 uppercase">
                        {{ $ap->Salary }} {{ $ap->currency }}, {{ $ap->Location }}
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
@stop


@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
