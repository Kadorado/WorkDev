@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


@if($userSkills === "mensaje de error")
<h2>por favor primero completa tus datos</h2>
<a href="/developerdata">Completar perfil</a>
@elseif(count($userSkills)== 0 )
<h1>no hay habilidades registradas</h1>
<a href="skills/show">registrar</a>
@else
<table class="min-w-full">
    <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Skill</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Eliminar</th>
  
        </tr>
    </thead>
    <tbody class="bg-white">
        @foreach ($userSkills as $userSkill)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                <div class="flex items-center">
                    <div>
                        <div class="text-sm leading-5 text-gray-800">{{ $userSkill->skillName }}</div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                <form action="{{route('skills.destroy', $userSkill->skill_id)}}" method="POST" id={{$userSkill->skill_id}}>
                    @csrf
                    @method('DELETE')
                    <button  type="button" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" onclick="deleteSkills({{$userSkill->skill_id}})">
                        eliminar
                    </button>
                {{-- </a> --}}
            </form>
            </td>
              </tr>
@endforeach
    </tbody>
</table>


<button>
    <a href="skills/show">Editar</a>
</button>

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