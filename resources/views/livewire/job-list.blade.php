<div class="justify-center py-6 my-6">
    <h1 class="py-6 my-6 text-3xl font-bold leading-tight text-center">Trabajos destacados</h1>
    <p class="mb-8 text-xl leading-normal text-center">Aplica y estarás un paso más cerca del empleo de tus sueños, en empresas como:</p>

    <h2 id="text" class="text-center text-3xl font-bold"></h2>
</div>

<div class="flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($jobs as $job)
            <a href="{{ route('vacancy', $job->Title) }}">
                <div class="h-full w-60 my-2 overflow-hidden bg-white rounded shadow-lg bg-opacity-20">
                    @if ($job->profile_photo_path !== null)
                        @php
                            $path_photo = 'storage/' . $job->profile_photo_path;
                        @endphp
                    @else
                        @php
                            $path_photo = 'favicons/favicon.png';
                        @endphp
                    @endif

                    <img class="object-cover h-60 w-60" src="{{ asset($path_photo) }}" alt="Foto de la empresa">
                    <div class="px-6 py-2">
                        <div class="mb-2 text-xl font-bold">{{ $job->Title }}</div>
                        <div class="mb-2 text-xl font-bold">{{ $job->NameCompany }}</div>
                    </div>


                    <div class="px-6 py-4">
                        <span
                            class="inline-block px-3 py-1 mr-2 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Localización:
                            {{ $job->Location }}</span>
                        <span
                            class="inline-block px-3 py-1 mr-2 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Salario:
                            {{ $job->Salary }}</span>
                        <span
                            class="inline-block px-3 py-1 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Moneda:
                            {{ $job->currency }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>



<script>
    const company = ["Grupo Familia !","Toyota !", "Gso Sotfware !","Servinformación !","Gradiweb !","Heinsohn !","Envia !", "Ruta N !", "Educamas !", ]
    const textEl = document.getElementById('text')
    const speedEl = 2;
    let idx = 1
    let id = 0;
    let speed = 300 / speedEl

    writeText()


    function writeText() {


        textEl.innerText = company[id].slice(0, idx)
        idx++

        if (idx > company[id].length) {
            idx = 1
            id++
        }
        if (id > company.length-1) {
            id = 0
        }


        setTimeout(writeText, speed)
        }


</script>
