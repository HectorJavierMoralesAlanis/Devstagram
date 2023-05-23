<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <!-- Encabezado de la pagina-->
        <header class="p-5 boreder-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text 3xl font-black">
                    Devstagram
                </h1>
                <!-- navegacion del sitio -->
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{route ("register")}}">Crear cuenta</a>
                </nav>
            </div>
        </header>
        <!-- Contenido de las vistas -->
        <main class="container mx-auto MT-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <!-- Pie de pagina -->
        <footer class="text-center p-5 text-gray-500 font-bold">
            Devstagram UPV - Derechos reservados {{now()->year}}
        </footer>
    </body>
</html>
