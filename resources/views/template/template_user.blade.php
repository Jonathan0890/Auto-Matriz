<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoMatriz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#27374D]">
    <header class="py-10 bg-[#000000]">
        <div class="container mx-auto flex items-center justify-between">
            <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                alt="Logo" width="200" height="200" class="rounded-full">
            <nav class="flex-grow ml-20">
                <ul class="flex justify-end space-x-10 text-lg text-white">
                    <li>
                        <a href="{{ url('/') }}" class="hover:text-red-600">Inicio</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-red-600">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="{{ url('/servicio') }}" class="hover:text-red-600">Servicio</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-red-600">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="mt-10">
        @yield('content')
    </div>
</body>

</html>
