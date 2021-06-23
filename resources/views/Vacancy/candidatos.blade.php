@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    @if ($candidates->count()==0)
        <h3>Aún no hay candidatos para esta vacante</h3>
    @else
        {{-- @dd($candidates) --}}
        @foreach ($candidates as $candidate )
        <div class="min-h-screen flex items-center justify-center px-4 mb-4 mt-4">

            <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">

                <div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Nombre
                        </p>
                        <p>
                            {{ $candidate->fullName }}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Experiencia
                        </p>
                        <p>
                            {{ $candidate->experience }} meses
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Perfil
                        </p>
                        <p>
                            {{ $candidate->about_me }}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            País
                        </p>
                        <p>
                            {{$candidate->country}}

                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Perfil de github
                        </p>
                        <a href="{{ $candidate->githubProfile }}" target="blank">
                            {{ $candidate->githubProfile }}
                        </a>
                    </div>


                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 ">
                        <p class="text-gray-600">
                            Acciones
                        </p>
                        <div class="space-y-2">
                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <a href="/{{$candidate->curriculum}}" target="blank">
                                    <button>
                                        ver curriculum
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
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

<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

@stop