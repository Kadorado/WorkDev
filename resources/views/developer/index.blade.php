@extends('adminlte::page')

@section('title', 'Dashboard')

    

@section('content')
    <h2 class="text-xl text-center text-blue-500">Candidatos</h2></h2>
    @if ($developers->count()==0)
        <h6>por ahora no tenemos candidatos para mostrar</h6>
        
    @else
        @foreach ($developers as $dev  )
        
        <div class="lg:flex shadow rounded-lg border  border-gray-400 mb-2">
          <div class="bg-blue-600 rounded-lg lg:w-2/12 py-1 block h-full shadow-inner">
            <div class="text-center tracking-wide">
                      @if ($dev->profile_photo_path !== null)
                          @php
                              $path_photo_2 = 'storage/' . $dev->profile_photo_path;
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
                      <div class="px-2 text-sm font-medium font-bold text-center text-gray-700 lg:text-left">
                          Nombre: {{ $dev->fullName}}
                      </div>
                  </div>
                  <div class="px-2 font-semibold text-center text-gray-800 uppercase text-l lg:text-left">
                      {{ $dev->about_me }}
                  </div>
                  <div class="px-2 pt-1 text-sm font-medium text-center text-gray-600 uppercase lg:text-left">
                      {{ $dev->country }} 
                  </div>
                  <div class="flex">
                    <a href="{{ $dev->curriculum }}" target="blank">ver curriculum</a>
                    <a href="{{ $dev->githubProfile }}" target="blank">
                      <button>github</button>
                    </a>
                    
                  </div>
              </div>
          </div>
        @endforeach

    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


