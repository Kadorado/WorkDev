@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')


    @if (sizeof($users) !== 0)
        <h1 class="text-center text-blue">Editar datos</h1>
        <form class="w-full max-w-lg" action="/companydata/{{ $users[0]->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="relative w-full mb-3 text-xl">
                <small class="text-center p-2 text-blue">* Nombre compañia</small>
                <input id="namecompany" name="namecompany" type="text" class="form-control" ¢ id="grid-first-name"
                    type="text" placeholder="Nombre de la compañia" tabindex="1" value="{{ $users[0]->NameCompany }}"
                    required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* Descripción</small>
                <input id="descripcion" name="descripcion" type="text" class="form-control" type="text"
                    placeholder="Somos una empresa que busca" tabindex="2" value="{{ $users[0]->DescriptionCompany }}"
                    required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* Website</small>
                <input id="website" name="website" type="url" class="form-control" id="grid-first-name" type="text"
                    placeholder="www.mistersas.com" tabindex="3" value="{{ $users[0]->WebsiteCompany }}" required>
            </div>

            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* NIT</small>
                <input id="nitcompany" name="nitcompany" type="text" class="form-control" id="grid-first-name" type="text"
                    placeholder="NIT OR ID" tabindex="3" value="{{ $users[0]->idCompany }}" required>
            </div>

            <button type="submit" class="btn btn-primary" tabindex="4" id="update" onclick="Update()">Actualizar</button>
        </form>

    @else
        <h1 class="text-center text-blue">Completar datos de tu compañia</h1>
        <form action="{{ route('companydata.store') }}" method="POST">
            @csrf
            <div class="relative w-full mb-3 text-xl">
                <small class="text-center p-2 text-blue">* Nombre compañia</small>
                <input id="namecompany_1" name="namecompany" type="text" class="form-control" tabindex="1" required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* Descripción</small>
                <input id="descripcion_1" name="descripcion" type="text" class="form-control" tabindex="2"  required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* Website</small>
                <input id="website_1" name="website" type="url" class="form-control" tabindex="3" required>
            </div>
            <div class="relative w-full mb-3 text-xl">
                <small class="p-2 text-blue">* NIT</small>
                <input id="nitcompany_1" name="nitcompany" type="text" class="form-control" tabindex="3"  required>
            </div>
            <a href="/dashboard" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" onclick="createDateCompany()" tabindex="4">Guardar</button>
        </form>
    @endif


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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

        function createDateCompany(){
            if (namecompany_1.value !== "" & descripcion_1.value !== "" & website_1.value !== "" & nitcompany_1.value !== "") {
                swal.fire('¡Tus datos han sido guardados!')
            } else {
                swal.fire("¡Llena todos los campos!")
            }
        }

    </script>
@stop
