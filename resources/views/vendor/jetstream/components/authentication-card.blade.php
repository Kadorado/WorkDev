<!--Plantilla base del login-->
{{-- <div class="m-auto bg-black"> --}}
   <div class="h-auto max-w-lg mx-6 my-12 shadow-lg md:flex md:mx-auto md:max-w-2xl">
      <img class="object-cover w-full rounded-lg rounded-r-none h-1/2 md:w-1/3 md:h-auto md:object-cover" src="{{asset("favicons/register.jpg")}}" alt="bag">
      <div class="w-full px-4 py-8 bg-white rounded-lg rounded-l-none md:w-2/3">
         <div class="flex items-center justify-center my-36">
         {{ $slot }}
         </div>
      </div>
   </div>

