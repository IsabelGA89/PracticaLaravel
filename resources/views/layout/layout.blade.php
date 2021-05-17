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
    @yield("contenido")

    {{--<footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">©
                2021 Isabel González Anzano
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a href="https://twitter.com/Isa_Anzano" target="_blank" class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
             viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a href="https://www.instagram.com/i.gonzalez/?hl=es" target="_blank" class="ml-3 text-gray-400">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a href="https://www.linkedin.com/in/isabelgonzalezanzano/" target="_blank" class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
             class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
        </div>
    </footer>--}}

</div>
<footer class="md:container md:mx-auto">
    @include('layout.footer')
</footer>
</body>
</html>