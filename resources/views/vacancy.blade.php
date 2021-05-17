@extends('layouts.templatebase')



@section('content')


{{-- organizar esto que quede mejor --}}

<div class="relative w-full max-w-6xl p-10 mx-auto text-gray-800 bg-white rounded shadow-xl lg:p-20 md:text-left">
  <!-- candado de solo para usuarios -->
  <p class="flex items-center text-sm text-gray-600">
    <svg class="w-3 h-3 mr-2 text-gray-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
    </svg>
    solo usuarios
  </p>
  <!-- contenedor de imagen y descripción -->
  <div class="items-center -mx-10 md:flex">
    <!-- imagen principal -->
    <div class="w-full px-10 mb-10 md:w-1/2 md:mb-0">
      <div class="relative">
        <img src="https://tailwindcss.com/img/card-top.jpg" class="relative z-10 w-full" alt="">

      </div>
    </div>
    <!-- info vacanet -->
    <div class="w-full px-10 md:w-1/2">
      <div class="mb-10">
        <p class="text-sm">Mejores Vacantes<br></p>
        <h1 class="mb-5 text-2xl font-bold uppercase">{{ $vacancy->Title }}</h1>
        <p class="text-sm">{{$vacancy->DescriptionVacancy}}</p>
        <br>
      </div>
    </div>
  </div>
  <!-- otros datos como salirio lugar moneda -->
  <div class="items-center px-10 -mx-10 md:flex ">
    <!-- colum1 -->
    <div class="flex-1">
      <!-- Ubicación -->
      <div class="flex">
        <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Ubicación:</h2>
        <p class="flex-1 text-2xl">{{$vacancy->Location}}</p>
      </div>
      <!-- info empresa -->
      <h2 class="mb-5 text-2xl font-bold uppercase ">Empresa:</h2>
      <div class="flex">
        <img src="https://gestionpyme.com/wp-content/uploads/2015/09/shutterstock_227788621.jpg" alt="logo de la empresa" class="flex-none object-cover w-16 h-16 m-4 rounded-full ">
        <div class="items-center flex-1 m-auto">
          <p class="leading-none text-gray-900 "> Informacion de la empresa de nosotros</p>
          <p class="text-gray-600 ">{{$vacancy->created_at->diffForHumans()}}</p>
        </div>
      </div>
    </div>
    <!-- colum2 -->
    <div class="flex-1">
      <!-- salario -->
      <div class="flex">
        <h2 class="flex-1 mb-5 text-2xl font-bold uppercase">Salario:</h2>
        <div class="flex-1 inline-block mr-5 align-bottom">
          <span class="text-2xl leading-none align-baseline">$</span>
          <span class="text-5xl font-bold leading-none align-baseline">{{$vacancy->Salary}}</span>
          <span class="text-2xl leading-none align-baseline">{{$vacancy->currency}}</span>
        </div>
      </div>
      <div class="mt-6 ">
       <a href="{{route("register")}}"><button class="px-20 py-3 mx-20 font-semibold text-white bg-yellow-300 rounded-full opacity-75 hover:opacity-90 hover:text-yellow-900"><i class="mr-2 -ml-2 mdi mdi-cart"></i> Aplicar</button></a> 
      </div>
    </div>

  </div>
</div>

<div>

  <livewire:job-list>

</div>

@endsection