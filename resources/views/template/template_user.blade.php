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
    <header class="py-6 bg-[#000000] ">
        <div class="container mx-auto flex items-center justify-between">
            <img src="{{ asset('image.png') }}" alt="Logo" class="rounded-full ">
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
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->hasRole('superadmin'))
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="hover:text-red-600">Dashboard</a>
                                </li>
                            @elseif (Auth::user()->hasRole('admin'))
                                <li>
                                    <a href="{{ url('/admin') }}" class="hover:text-red-600">Admin</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ url('/profile') }}" class="hover:text-red-600">Perfil</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{ url('/login') }}" class="hover:text-red-600">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ url('/register') }}" class="hover:text-red-600">Registro</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    
                    <li>
                        <a class="nav-link inline-flex items-center justify-between w-full text-sm font-medium" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('tierra.png') }}" alt="Lenguaje" class="w-[35px] h-[35px]">
                            <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu absolute hidden mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-10" aria-labelledby="navbarDropdown">
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/es') }}">Español</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/en') }}">English</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/fr') }}">Français</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/ar') }}">العربية</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/hi') }}">हिन्दी</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/ru') }}">Русский</a></li>
                            <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ url('lang/ko') }}">한국어</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <div class="mt-10">
        @yield('content')

    </div>


    <footer class="bg-[#9DB2BF] py-6 ">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima adipisci voluptatibus ullam
                    enim recusandae debitis at saepe nulla vero, distinctio qui vel eligendi animi blanditiis quos!
                    Dignissimos, ducimus sit?
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle the dropdown menu
        document.getElementById('navbarDropdown').addEventListener('click', function(event) {
            event.preventDefault();
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });

        // Hide dropdown when clicking outside
        window.addEventListener('click', function(event) {
            const dropdown = document.getElementById('navbarDropdown').nextElementSibling;
            if (!event.target.closest('#navbarDropdown') && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>

</body>


</html>
