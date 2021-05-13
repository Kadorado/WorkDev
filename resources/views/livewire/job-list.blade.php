<div class="grid grid-cols-3 gap-4 mt-4">
    @foreach($jobs as $job)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a>
            <img  class ="rounded-md mb-2">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{$job->Title}}</h2>
            <h3 class="text-lg text-gray-600">{{$job->Location}}</h3>
            <h4 class="text-lg text-gray-600">{{$job->Salary}} {{$job->currency}}</h4>

            <img src="" alt="" class="rounded-full mt-4 mx-auto h-16 w-16">
        </a>
    </div>
    @endforeach
</div>
