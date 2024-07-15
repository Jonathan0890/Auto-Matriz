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


    <footer class="bg-[#4c5c7c] py-6 ">
        <div class="container mx-auto">
            <div class="flex justify-end space-x-6">
                <!-- Empleado 1 -->
                <div class="text-center">
                    <img src="{{ asset('persons.png') }}" alt="Empleado 1" class="w-30 h-20 mx-auto rounded-full">
                    <p class="text-white text-xs mt-2">Jose Antonio Francisco</p>
                    <p class="text-white text-xs">9982938678</p>
                </div>
                <!-- Empleado 2 -->
                <div class="text-center">
                    <img src="{{ asset('persons.png') }}" alt="Empleado 2" class="w-30 h-20 mx-auto rounded-full">
                    <p class="text-white text-xs mt-2">Nelvin Acopa</p>
                    <p class="text-white text-xs">9988953263</p>
                </div>
                <!-- Empleado 3 -->
                <div class="text-center">
                    <img src="{{ asset('persons.png') }}" alt="Empleado 3" class="w-30 h-20 mx-auto rounded-full">
                    <p class="text-white text-xs mt-2">Juan Carlos Balam</p>
                    <p class="text-white text-xs">9988603309</p>
                </div>
                <!-- Empleado 4 -->
                <div class="text-center">
                    <img src="{{ asset('persons.png') }}" alt="Empleado 4" class="w-30 h-20 mx-auto rounded-full">
                    <p class="text-white text-xs mt-2">Armando Eduardo</p>
                    <p class="text-white text-xs">9982932808</p>
                </div>
                <!-- Empleado 5 -->
                <div class="text-center">
                    <img src="{{ asset('persons.png') }}" alt="Empleado 5" class="w-30 h-20 mx-auto rounded-full">
                    <p class="text-white text-xs mt-2">Maria Luisa</p>
                    <p class="text-white text-xs">9981795843</p>
                </div>
            </div>
            
            
            <div class="text-center mt-6 text-white">
                <h4 class="font-semibold text-lg">Copyright © 2022-2025</h4>
                <p class="mt-2 bg-brown-500 p-4">

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
