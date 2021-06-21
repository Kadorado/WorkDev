@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <!-- This is an example component -->


    <section class="p-8 bg-indigo-dark h-50">
        <h1 class="text-center text-blue text-bold">Ofertas disponibles</h1>
        <form class="container flex justify-center py-8 mx-auto" action="/ofert/filterBy" id="searchForm">
            <input name="searchby" id="search"
                class="w-2/3 h-12 px-3 mx-4 mb-8 rounded shadow-lg focus:outline-none focus:shadow-outline text-s"
                type="search" placeholder="Buscar por palabra clave">
            <button class="flex items-center justify-center w-10 h-10 px-4 py-4 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105" type="button" onclick="SearchVerifed()"><i class="fas fa-search"></i></button>
        </form>
    </section>



    @if (sizeof($jobsDevs)==0)
        <h2 class="text-center text-blue">Tu busqueda no arrojo resultados</h2>

    @else
        @foreach ($jobsDevs as $jobDev)

            <a href="{{ route('jobdetail', [$jobDev->Title, $jobDev->id]) }}">
                <div class="mb-2 border border-gray-400 rounded-lg shadow lg:flex">
                    <div class="block h-full py-1 bg-blue-600 rounded-lg shadow-inner lg:w-2/12">
                        <div class="tracking-wide text-center">
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
                    <div class="w-full px-1 py-5 tracking-wide bg-white lg:w-11/12 xl:w-full lg:px-2 lg:py-2">
                        <div class="flex flex-row justify-center lg:justify-start">
                            <div class="px-2 text-sm font-medium text-center text-gray-700 lg:text-left">
                                <i class="far fa-clock"></i>
                                {{ \Carbon\Carbon::parse($jobDev->created_at)->diffForHumans() }}
                            </div>
                            <div class="px-2 text-sm font-medium font-bold text-center text-gray-700 lg:text-left">
                                Compañia : {{ $jobDev->NameCompany }}
                            </div>
                        </div>
                        <div class="px-2 font-semibold text-center text-gray-800 uppercase text-l lg:text-left">
                            {{ $jobDev->Title }}
                        </div>
                        <div class="px-2 pt-1 text-sm font-medium text-center text-gray-600 uppercase lg:text-left">
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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
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
