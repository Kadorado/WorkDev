@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')


<div class="relative w-full max-w-2xl p-10 mx-auto text-gray-800 bg-white rounded shadow-xl lg:p-20 md:text-left">
    <!-- candado de solo para usuarios -->
   
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
            
            <div class="flex">
                <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Experiencia requerida (meses): {{ $vacancy[0]->ExperienceRequire }}</h2>

            </div>
                
            <!-- info empresa -->
            <h2 class="mb-5 text-2xl font-bold uppercase ">Empresa: {{ $vacancy[0]->NameCompany }}
            </h2>
            <div class="flex">
                <div class="items-center flex-1 m-auto">
                    <p class="text-gray-600 ">{{\Carbon\Carbon::parse($vacancy[0]->created_at)->diffForHumans()  }}</p>
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
                <a href="{{ route('register') }}"><button
                        class="px-20 py-3 mx-20 font-semibold text-white bg-blue-400 rounded-full opacity-75 hover:opacity-90 hover:text-blue-900 focus:outline-none"><i
                            class="mr-2 -ml-2 mdi mdi-cart "></i> Aplicar</button></a>
            </div>

            <a href="/ofertas">
                <button>Atras</button>
            </a>
        </div>

    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop