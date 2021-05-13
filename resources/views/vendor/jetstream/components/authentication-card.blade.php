<!--Plantilla base del login-->
<div class="flex flex-row flex-wrap items-center min-h-screen pt-6 sm:justify-center sm:pt-0 ">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-10 py-4 pt-10 mx-auto mt-12 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
        <div class="flex items-center justify-center py-6 my-6 ">
            <!-- <img src="" alt="Logo" > -->
            coders
        </div>
        {{ $slot }}
    </div>
</div>

