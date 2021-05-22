@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')



@foreach ($jobsDevs as $jobDev )
<a href="{{route('jobdetail' , $jobDev->Title )}}">
<section class="min-h-screen flex items-center justify-center px-4 mb-4 bg-white">
    <div class="max-w-xl w-full rounded-lg shadow-lg p-4 flex md:flex-row flex-col">
        <div class="flex-1">
            <h3 class="font-semibold text-lg tracking-wide">{{$jobDev->Title}}</h3>
            <h3 class="font-semibold text-lg tracking-wide">{{$jobDev->NameCompany}}</h3>
            <p class="text-gray-500 my-1">
                {{$jobDev->ExperienceRequire}}
            </p>

            @if ($jobDev->profile_photo_path !== NULL)
            @php
                $path_photo_2 = "storage/".$jobDev->profile_photo_path;
            @endphp
            @else
            @php
                $path_photo_2 = 'favicons/favicon.png'
            @endphp
            @endif
            <img src="{{ asset($path_photo_2) }}" class="relative z-10 object-cover m-auto w-96 h-96" alt="logo de la empresa">
        </div>
    </div>
</section>
@endforeach





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop