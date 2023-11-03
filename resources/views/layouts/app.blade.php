<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="bg-gray-100">
        
        <header class="p-5 border-b bg-white shadow flex justify-between">

            <h1 class="ml-14 text-3xl font-black">
                Devstagram
            </h1>

            @if(auth()->user())
                <p>Autenticado</p>
            @else
                <p>No autenticado</p>
            @endif

            <ul class="mr-14 mt-1 font-bold flex gap-5 text-xl">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Crear cuenta</a>
            </ul>

        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('contenido')
            </h2>
        </main>

        <footer class="text-center p-10 text-gray-500 font-bold uppercase">

            Devstagram - Todos los derechos reservados {{ date('Y') }}

        </footer>


    </body>
</html>
