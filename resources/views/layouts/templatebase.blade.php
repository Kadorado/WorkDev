<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de programación web</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="shadow-lg"> 

        <nav class="bg-blue-700 py-6">
            <a href="">
            <img src="{{asset ('images') }}" class="h-8 mx-auto" alt="Logo">
            </a>
        </nav>

        @auth
            <a href="url('dashboard')" class="text-sm text-gray-700 underline ">Dashboard</a>
        @else
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/Nosotros')}}">Nosotros</a>
            <a href="{{url('login')}}" class="text-sm text-gray-700 underline ">Login</a>
            <a href="{{url('register')}}" class="ml-4 text-sm text-gray-700 underline">Registro</a>
            
        @endif

    </header>


    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
    Soy footer
        </footer>
</body>
</html>