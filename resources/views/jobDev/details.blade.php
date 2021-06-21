@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')



    <div class="relative w-full max-w-2xl p-10 mx-auto text-gray-800 bg-white rounded shadow-xl lg:p-20 md:text-left">
        <!-- candado de solo para usuarios -->
        <p class="flex items-center text-sm text-gray-600">
            <svg class="w-3 h-3 mr-2 text-gray-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
            </svg>
            solo usuarios
        </p>
        <!-- contenedor de imagen y descripción -->
        <div class="items-center -mx-10 md:flex">
            <!-- imagen principal -->
            <div class="w-full px-10 mb-10 md:w-1/2 md:mb-0">
                <div class="relative">
                    @if ($vacancy[0]->profile_photo_path !== null)
                        @php
                            $path_photo_2 = 'storage/' . $vacancy[0]->profile_photo_path;
                        @endphp
                    @else
                        @php
                            $path_photo_2 = 'favicons/favicon.png';
                        @endphp
                    @endif
                    <img src="{{ asset($path_photo_2) }}" class="relative z-10 object-cover m-auto w-96 h-60"
                        alt="logo de la empresa">

                </div>
            </div>
            <!-- info vacanet -->
            <div class="w-full px-10 md:w-1/2">
                <div class="mb-10">
                    <p class="text-sm">Mejores Vacantes<br></p>
                    <h1 class="mb-5 text-2xl font-bold uppercase">{{ $vacancy[0]->Title }}</h1>
                    <p class="text-sm">{{ $vacancy[0]->DescriptionVacancy }}</p>
                    <br>
                    {{-- tnecnologias --}}
                    <div class="flex flex-wrap">
                        {{-- call vacancy --}}
                        @foreach ($userTecno as $tec)
                            <div
                                class="flex w-auto max-w-sm mx-4 my-2 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-center w-12 bg-blue-400">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span
                                            class="font-semibold text-blue-400 dark:text-blue-400">{{ $tec->tecno }}</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <h2>{{$tec->tecno}}</h2> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- otros datos como salirio lugar moneda -->
        <div class="items-center px-10 -mx-10 md:flex ">
            <!-- colum1 -->
            <div class="flex-1">
                <!-- Ubicación -->
                <div class="flex">
                    <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Ubicación: {{ $vacancy[0]->Location }}</h2>

                </div>
                <!-- info empresa -->
                <h2 class="mb-5 text-2xl font-bold uppercase ">Empresa: {{ $vacancy[0]->NameCompany }}
                </h2>

                <a class="mb-5 text-2xl font-bold uppercase " href= {{ $vacancy[0]->WebsiteCompany }} target="_blank">Sitio web compañia
                </a>

                <div class="flex">
                    <div class="items-center flex-1 m-auto">
                        <i class="fa fa-calendar" aria-hidden="false"></i>
                        <p class="text-gray-600 ">{{ \Carbon\Carbon::parse($vacancy[0]->created_at)->diffForHumans() }}
                        </p>
                    </div>

                </div>
            </div>
            <!-- colum2 -->
            <div class="flex-1">
                <!-- salario -->
                <div class="flex">
                    <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Salario:</h2>
                    <div class="flex-1 inline-block mr-5 align-bottom">
                        <span class="text-2xl leading-none align-baseline"></span>
                        <span class="text-5xl font-bold leading-none align-baseline">{{ $vacancy[0]->Salary }}</span>
                        <span class="text-2xl leading-none align-baseline">{{ $vacancy[0]->currency }}</span>
                    </div>
                </div>
                <div class="mt-6 ">
                    

                    <a href="/ofertas"><button
                            class="px-20 py-3 mt-4 mx-20 font-semibold text-white bg-blue-400 rounded-full opacity-75 hover:opacity-90 hover:text-blue-900 focus:outline-none"><i
                                class="mr-2 -ml-2 mdi mdi-cart "></i>ofertas</button></a>
                </div>
            <div class="mt-6 ">
                <form action="{{route('applications.store')}}" method="POST">
                    @csrf
                    <input id="vacancy_id" name="vacancy_id" type="hidden" value={{ $vacancy[0]->id }}>
                    <button 
                        type=submit
                        class="px-20 py-3 mx-20 font-semibold text-white bg-blue-400 rounded-full opacity-75 hover:opacity-90 hover:text-blue-900 focus:outline-none"><i
                            class="mr-2 -ml-2 mdi mdi-cart "></i> Aplicar</button></a>
                </form>
                
            </div>

        </div>
    </div>



@stop

@section('css')
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
