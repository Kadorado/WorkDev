@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <!-- This is an example component -->


    <section class="bg-indigo-dark h-50 p-8">
        <h1 class="text-center text-blue  text-bold">Ofertas disponibles</h1>
        <form class="container mx-auto py-8" action="/ofert/filterBy" id="searchForm">
            <input name="searchby" id="search"
                class="w-full h-12 px-3 rounded mb-8 focus:outline-none focus:shadow-outline text-s   px-8 shadow-lg"
                type="search" placeholder="Buscar por palabra clave">
            <button class="btn btn-primary" type="button" onclick="SearchVerifed()">Buscar</button>
        </form>
    </section>



    @if (sizeof($jobsDevs)==0)
        <h2 class="text-center text-blue">Tu busqueda no arrojo resultados</h2>

    @else
        @foreach ($jobsDevs as $jobDev)

            <a href="{{ route('jobdetail', [$jobDev->Title, $jobDev->id]) }}">
                <div class="lg:flex shadow rounded-lg border  border-gray-400 mb-2">
                    <div class="bg-blue-600 rounded-lg lg:w-2/12 py-1 block h-full shadow-inner">
                        <div class="text-center tracking-wide">
                            @if ($jobDev->profile_photo_path !== null)
                                @php
                                    $path_photo_2 = 'storage/' . $jobDev->profile_photo_path;
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
                    <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                        <div class="flex flex-row lg:justify-start justify-center">
                            <div class="text-gray-700 font-medium text-sm text-center lg:text-left px-2">
                                <i class="far fa-clock"></i>
                                {{ \Carbon\Carbon::parse($jobDev->created_at)->diffForHumans() }}
                            </div>
                            <div class="text-gray-700 font-bold font-medium text-sm text-center lg:text-left px-2">
                                Compañia : {{ $jobDev->NameCompany }}
                            </div>
                        </div>
                        <div class=" uppercase font-semibold text-gray-800 text-l text-center lg:text-left px-2">
                            {{ $jobDev->Title }}
                        </div>
                        <div class="text-gray-600 font-medium text-sm pt-1 text-center lg:text-left px-2 uppercase">
                            {{ $jobDev->Salary }} {{ $jobDev->currency }}, {{ $jobDev->Location }}
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
        var search = document.getElementById("search");
        var formSearch = document.getElementById("searchForm")

        function SearchVerifed() {
            if (search.value === "") {
                swal.fire("Por favor escribe algo")
            } else {
                formSearch.submit()
            }
        }

    </script>
@stop
