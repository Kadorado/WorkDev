<div class="justify-center py-6 my-6">
    <h1 class="py-6 my-6 text-5xl font-bold leading-tight text-center">Trabajos destacados</h1>
    <p class="mb-8 text-2xl leading-normal text-center">Aplica y estarás un paso más cerca del empleo de tus sueños.</p>
</div>

<div class="flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
    @foreach($jobs as $job)
        <a href="{{route('vacancy' , $job->Title)  }}">
        <div class="max-w-xs my-2 overflow-hidden bg-white rounded shadow-lg bg-opacity-20">
            @if ($job->profile_photo_path !== NULL)
                @php
                    $path_photo = "storage/".$job->profile_photo_path;
                @endphp
            @else
                @php
                    $path_photo = 'favicons/favicon.png'
                @endphp
            @endif

            <img class="w-full" src="{{ asset($path_photo) }}" alt="Sunset in the mountains">
            <div class="px-6 py-2">
                <div class="mb-2 text-xl font-bold">{{$job->Title}}</div>
                <div class="mb-2 text-xl font-bold">{{$job->NameCompany}}</div>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block px-3 py-1 mr-2 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Localización: {{$job->Location}}</span>
                <span class="inline-block px-3 py-1 mr-2 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Salario: {{$job->Salary}}</span>
                <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full bg-grey-lighter text-grey-darker">Moneda: {{$job->currency}}</span>
            </div>
        </div>
        </a>
    @endforeach
    </div>
</div>

