@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


@if($userSkills === "mensaje de error")
<div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
    <h1 class="mb-10 text-xl text-center text-blue-500">Por favor primero completa tus datos</h1>

    <a href="/developerdata">
        <button class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">Completar perfil</button> </a>
</div>

@elseif(count($userSkills)== 0 )
<div class="flex flex-col items-center justify-center w-full text-center md:w-4/5 md:text-center">
    <h1 class="mb-10 text-xl text-center text-blue-500">no haz registrado tu formación acádemica</h1>
    <a href="skills/show">
        <button class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">
            registrar
        </button> </a>
</div>
@else
<body class="flex items-center justify-center">
	<div class="container">
        @foreach ($userSkills as $userSkill)
		<table class="flex flex-row flex-wrap w-full my-2 overflow-hidden rounded-lg sm:bg-white sm:shadow-lg">
            
                <thead class="text-white">
                    <tr class="flex flex-col flex-wrap mb-2 bg-blue-400 rounded-l-lg sm:table-row sm:rounded-none sm:mb-0">
                        <th class="h-20 p-3 text-left">Skill</th>
                        <th class="p-3 text-left" width="110px">Acciones</th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    <tr class="flex flex-col mb-2 flex-no wrap sm:table-row sm:mb-0">
                        <td class="h-20 p-3 text-xs border border-grey-light lg:w-2/5 lg:text-xl sm:w-2/5 sm:text-xl hover:bg-gray-100">{{ $userSkill->skillName }}</td>
            
                        <td class="p-3 text-red-400 border cursor-pointer lg:w-1/5 sm:w-1/5 border-grey-light hover:bg-gray-100 hover:text-red-600 hover:font-medium">
                            <form action="{{route('skills.destroy', $userSkill->skill_id)}}" method="POST" id={{$userSkill->skill_id}}>
                                @csrf
                                @method('DELETE')
                                <button type="button" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" onclick="deleteSkills({{$userSkill->skill_id}})">
                                    Eliminar
                                </button>
                            </a>
                        </form>
                        </td>
                    </tr>
                </tbody>
            
		</table>
        @endforeach
	</div>
</body>

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>


<div class="flex flex-row justify-end mx-auto">
    <a href="skills/show">
        <button class="px-8 py-2 mb-8 font-bold text-green-600 transition duration-300 ease-in-out transform bg-green-200 rounded-full shadow-lg lg:mx-0 focus:outline-none focus:shadow-outline hover:bg-green-500 hover:text-white hover:scale-105">Editar</button>
    </a>
</div>


@endif






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


<script>


function deleteSkills(id) {

var formulario = document.getElementById(id);

Swal.fire({
    title: '¿Estas seguro de querer eliminar esta habilidad?',
    text: "¡No podras revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si,Eliminar!',
    cancelButtonText: "Cancelar"
}).then((result) => {

        confirmation = result.value
        if (confirmation === true) {

            swal.fire(
                'Eliminada!',
                'Esta habilidad ha sido eliminada.',
                'success'
            ), formulario.submit()
        }
    }

)


}

</script>




@stop