@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<h2 class="text-xl text-center text-blue-500">Tus Aplicaciones</h2></h2>
@if($userApplication=="mensaje de error")
    <h6>Primero debes completar tus datos</h6>
@elseif($userApplication->count()==0)
    <h6>Aún no has aplicado a ninguna oferta</h6>
@else
{{-- @dd($userApplication) --}}
    @foreach ($userApplication as $ap )
        <div class="lg:flex shadow rounded-lg border border-gray-400 mb-2">
            <div class="bg-blue-600 rounded-lg lg:w-2/12 py-1 block h-full shadow-inner">
              <div class="text-center tracking-wide">
                @if ($ap->profile_photo_path !== NULL)
                @php
                    $path_photo_2 = "storage/".$ap->profile_photo_path;
                @endphp
                @else
                @php
                    $path_photo_2 = 'favicons/favicon.png'
                @endphp
                @endif
                <img src="{{ asset($path_photo_2) }}" class="relative z-10 object-cover m-auto w-96 h-96" alt="logo de la empresa">
              </div>
            </div>
            <div class="w-full lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
              <div class="flex flex-row lg:justify-start justify-center">
                <div class="text-gray-700 font-medium text-sm text-center lg:text-left px-2">
                  <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($ap->created_at)->diffForHumans() }}
                </div>
                <div class="text-gray-700 font-bold font-medium text-sm text-center lg:text-left px-2">
                  Compañia : {{ $ap->NameCompany}}
                </div>
              </div>
              <div class=" uppercase font-semibold text-gray-800 text-l text-center lg:text-left px-2">
               {{$ap->Title}}
              </div>
              <div class="text-gray-600 font-medium text-sm pt-1 text-center lg:text-left px-2 uppercase">
                {{$ap->Salary}} {{$ap->currency}}, {{$ap->Location}}
              </div>
              <form action="{{ route('applications.destroy', $ap->vacancy_id) }}" method="POST" id={{$ap->vacancy_id}}>
                @csrf
                @method('DELETE')
                <div class="text-right">
                  <button type="button" onclick="DeleteApplication({{$ap->vacancy_id}})" class="justify-center w-auto p-1 mx-6 text-white bg-green-600 rounded-lg shadow outline-none focus:bg-green-700 hover:bg-green-500">
                    eliminar aplicacíon
                  </button>
              </div>
              </form>
              
            </div>
          </div>
    @endforeach
@endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/tailwindcss@1.3.4/dist/tailwind.min.css" rel="stylesheet">
@stop


@section('js')
    <script>
        function DeleteApplication(id) {
        var formulario = document.getElementById(id);
            Swal.fire({
                title: '¿Estas seguro de querer eliminar tu aplicación?',
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
                            '',
                            'ya no estas aplicando a la vacante',
                            'success'
                        )
                        formulario.submit();


                    }
                }

            )


        }

    </script>
@stop
