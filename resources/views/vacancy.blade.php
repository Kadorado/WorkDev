@extends('layouts.templatebase')




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
                    @if ($vacancy->recrutier->user->profile_photo_path !== null)
                        @php
                            $path_photo_2 = 'storage/' . $vacancy->recrutier->user->profile_photo_path;
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
                    <h1 class="mb-5 text-2xl font-bold uppercase">{{ $vacancy->Title }}</h1>
                    <p class="text-sm">{{ $vacancy->DescriptionVacancy }}</p>
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
                    <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Ubicación: {{ $vacancy->Location }}</h2>

                </div>
                <!-- info empresa -->
                <h2 class="mb-5 text-2xl font-bold uppercase ">Empresa: {{ $vacancy->recrutier->NameCompany }}
                </h2>
                <a class="mb-5 text-2xl font-bold uppercase " href= {{ $vacancy->recrutier->WebsiteCompany }} target="_blank">Sitio web compañia
                </a>
                <div class="flex">
                    <img src={{ asset('favicons/logo.jpg') }} alt="logo de la empresa"
                        class="flex-none object-cover w-16 h-16 m-4 rounded-full ">
                    <div class="items-center flex-1 m-auto">
                        <p class="text-gray-600 ">{{ $vacancy->created_at->diffForHumans() }}</p>
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
                        <span class="text-5xl font-bold leading-none align-baseline">{{ $vacancy->Salary }}</span>
                        <span class="text-2xl leading-none align-baseline">{{ $vacancy->currency }}</span>
                    </div>
                </div>
                <div class="mt-6 ">
                    <a href="{{ route('register') }}"><button 
                            class="px-20 py-3 mx-20 font-semibold text-white bg-blue-400 rounded-full opacity-75 hover:opacity-90 hover:text-blue-900 focus:outline-none"><i
                                class="mr-2 -ml-2 mdi mdi-cart "></i> Aplicar</button></a>
                </div>
            </div>

        </div>
    </div>

    <div>

        <livewire:job-list>

    </div>

@endsection
