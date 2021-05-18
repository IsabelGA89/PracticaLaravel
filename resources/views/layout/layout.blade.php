<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <title>@yield('title')</title>

</head>
<body>

<header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <div class="h-10 w-10 self-center mr-2">
                <img class="h-10 w-10 self-center bg-white" src="{{asset('img/logo.png')}}"/>
            </div>
            <span class="ml-3 text-xl">NGs</span>
        </a>
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700 flex flex-wrap items-center text-base justify-center">
            <a href="{{url('facturas')}}" class="mr-5 hover:text-white">Facturas</a>
            <a href="{{url('clientes')}}" class="mr-5 hover:text-white">Clientes</a>
            <a href="{{url('empleados')}}" class="mr-5 hover:text-white">Empleados</a>
            <a href="{{url('idiomas')}}" class="mr-5 hover:text-white">Idiomas</a>
            <a href="{{url('personal')}}" target="_blank" class="mr-5 hover:text-white">Quien soy</a>
            <a href="{{url('contacta')}}" class="mr-5 hover:text-white">Contacto</a>
        </nav>
        <a href="{{url('inicio')}}" class="mr-5 text-right hover:text-white">Log Out</a>
    </div>
</header>
<div class="md:container md:mx-auto">
    <main>
        @yield("contenido")
    </main>
    <footer class="md:container md:mx-auto">
        @include('layout.footer')
    </footer>
</div>

</body>
</html>