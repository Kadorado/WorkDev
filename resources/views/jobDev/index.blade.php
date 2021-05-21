@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

@foreach ($jobsDevs as $jobDev )
    <h3>{{$jobDev->Title}} ; {{$jobDev->Salary}} ;{{$jobDev->ExperienceRequire}}</h3>
@endforeach





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop