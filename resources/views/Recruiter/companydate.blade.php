@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')


    @if (sizeof($users) !== 0)
        <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">

        <h1 class="text-center text-green text-bold text-xl">Editar datos</h1>
        <form class="shadow-md rounded px-8 pt-4 pb-2 mb-4 " action="/companydata/{{ $users[0]->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="relative w-full mb-3 text-xl">
                <small class="text-center p-2 text-green text-bold">* Nombre compañia</small>
                <input id="namecompany" name="namecompany" type="text"
                    class="w-full p-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                    ¢ id="grid-first-name" type="text" placeholder="Nombre de la compañia" tabindex="1"
                    value="{{ $users[0]->NameCompany }}" required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* Descripción</small>
                <input id="descripcion" name="descripcion" type="text"
                    class="w-full p-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                    type="text" placeholder="Somos una empresa que busca" tabindex="2"
                    value="{{ $users[0]->DescriptionCompany }}" required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* Website</small>
                <input id="website" name="website" type="url"
                    class="w-full p-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                    id="grid-first-name" type="text" placeholder="www.mistersas.com" tabindex="3"
                    value="{{ $users[0]->WebsiteCompany }}" required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* NIT</small>
                <input id="nitcompany" name="nitcompany" type="text"
                    class="w-full p-2 text-sm text-gray-700 placeholder-gray-400 bg-white border-0 rounded shadow focus:outline-none focus:ring"
                    id="grid-first-name" type="text" placeholder="NIT OR ID" tabindex="3"
                    value="{{ $users[0]->idCompany }}" required>
            </div>

            <div class="mt-4 mb-32 text-center">
                <button type="submit"
                class="flex-0.5 px-4 py-2  mx-6 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-100"
                type="submit" id="update" onclick="Update()"> Actualizar</button>
        
            </div>
            </form>

    @else
        <h1 class="text-center text-green text-xl text-bold">Completar datos de tu compañia</h1>
        <form action="{{ route('companydata.store') }}" method="POST">
            @csrf
            <div class="relative w-full mb-3 text-xl">
                <small class="text-center p-2 text-green text-bold">* Nombre compañia</small>
                <input id="namecompany_1" name="namecompany" type="text" class="form-control" tabindex="1" required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* Descripción</small>
                <input id="descripcion_1" name="descripcion" type="text" class="form-control" tabindex="2" required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* Website</small>
                <input id="website_1" name="website" type="url" class="form-control" tabindex="3" required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-green text-bold">* NIT</small>
                <input id="nitcompany_1" name="nitcompany" type="text" class="form-control" tabindex="3" required>
            </div>


            <div class="mt-4 mb-32 text-center items-start	">
                <div class="mt-4 mb-32 text-center">
                    <a href="/dashboard"
                        class="flex-0.5 px-4 py-2 m-auto mx-6 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-100"
                        tabindex="5">Cancelar</a>
                    </div>
        
                    <div class="mt-4 mb-32 text-center">
                        <button type="submit"
                            class="flex-0.5 px-4 py-2 m-auto mx-6 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-100"
                            onclick="createDateCompany()" tabindex="4">Guardar</button>
        
                    </div>    
            </div>
            
        </form>
    @endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
@stop


@section('js')


    <script>
        var namecompany = document.getElementById("namecompany")
        var descripcion = document.getElementById("descripcion")
        var website = document.getElementById("website")
        var nitcompany = document.getElementById("nitcompany")



        var namecompany_1 = document.getElementById("namecompany_1")
        var descripcion_1 = document.getElementById("descripcion_1")
        var website_1 = document.getElementById("website_1")
        var nitcompany_1 = document.getElementById("nitcompany_1")


        function Update() {

            if (namecompany.value !== "" & descripcion.value !== "" & website.value !== "" & nitcompany.value !== "") {
                swal.fire('¡Tus datos han sido actulizados!')
            } else {
                swal.fire("¡Llena todos los campos!")
            }

        }

        function createDateCompany() {
            if (namecompany_1.value !== "" & descripcion_1.value !== "" & website_1.value !== "" & nitcompany_1.value !==
                "") {
                swal.fire('¡Tus datos han sido guardados!')
            } else {
                swal.fire("¡Llena todos los campos!")
            }
        }

    </script>
@stop
