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
                        <a href="{{ url('/nos') }}" class="hover:text-red-600">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="{{ url('/servicio') }}" class="hover:text-red-600">Servicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="hover:text-red-600">Contacto</a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}" class="hover:text-red-600">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin') }}" class="hover:text-red-600">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="mt-10">
        @yield('content')
    </div>

    <footer class="bg-[#9DB2BF] py-6">
        <div class="container mx-auto">
            <div class="flex justify-end space-x-6">
                <!-- Facebook -->
                <div class="text-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('discord.svg') }}" alt="Logo de Facebook" class="w-14 h-14 mx-auto">
                    </a>
                    <p class="text-white text-xs mt-2">Facebook</p>
                </div>
                <!-- Instagram -->
                <div class="text-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('discord.svg') }}" alt="Logo de Instagram" class="w-14 h-14 mx-auto">
                    </a>
                    <p class="text-white text-xs mt-2">Instagram</p>
                </div>
                <!-- Twitter -->
                <div class="text-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('discord.svg') }}" alt="Logo de Twitter" class="w-14 h-14 mx-auto">
                    </a>
                    <p class="text-white text-xs mt-2">Twitter</p>
                </div>
                <!-- YouTube -->
                <div class="text-center">
                    <a href="https://www.youtube.com" target="_blank">
                        <img src="{{ asset('discord.svg') }}" alt="Logo de YouTube" class="w-14 h-14 mx-auto">
                    </a>
                    <p class="text-white text-xs mt-2">YouTube</p>
                </div>
                <!-- Discord -->
                <div class="text-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('discord.svg') }}" alt="Logo de Discord" class="w-14 h-14 mx-auto">
                    </a>
                    <p class="text-white text-xs mt-2">Discord</p>
                </div>
            </div>
            <div class="text-center mt-6 text-white">
                <h4 class="font-semibold text-lg">Copyright © 2022</h4>
                <p class="mt-2 bg-brown-500 p-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima adipisci voluptatibus ullam enim recusandae debitis at saepe nulla vero, distinctio qui vel eligendi animi blanditiis quos! Dignissimos, ducimus sit?
                </p>
            </div>
        </div>
    </footer>
    

</body>

</html>
