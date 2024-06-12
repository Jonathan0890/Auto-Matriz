<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex overflow-x-hidden bg-[#DDE6ED]">
    <div id="sidebar" class="w-64 min-h-screen fixed bg-gray-800 text-white flex flex-col">
        <div class="p-4">
            <button id="menu-toggle" class="text-white">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="flex flex-col items-center p-4">
            <div class="mb-6 rounded-circle">
                <img src="{{ asset('image.png') }}" alt="Logo" class="w-[200px] h-[100px]">
            </div>
            <nav class="w-full">
                <ul class="flex flex-col w-full">
                    <li class="w-full">
                        <a href="{{url('/admin')}}" class="block px-14 py-2 hover:bg-gray-700">Inicio</a>
                    </li>
                    <li class="w-full">
                        <a href="{{url('/admin/factura')}}" class="block px-14 py-4 hover:bg-gray-700">Factura</a>
                    </li>
                    <li class="w-full">
                        <a href="{{url('/admin/mensaje')}}" class="block px-14 py-4 hover:bg-gray-700">Mensajes</a>
                    </li>
                    <li class="w-full">
                        <a href="{{url('/admin/report')}}" class="block px-14 py-4 hover:bg-gray-700">Reporte</a>
                    </li>
            <!-- foreach($reports as $report) 
                    <li class="w-full">
                        <a href="" class="block px-14 py-[475px] hover:bg-gray-700">Cerrar Sesion</a>
                    </li>  -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="flex-1 ml-64 p-6">
        <div class="flex-col justify-center">
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');

            if (menuToggle && sidebar) {
                menuToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('hidden');
                    sidebar.classList.toggle('w-64');
                });
            } else {
                console.error('menu-toggle or sidebar element not found.');
            }
        });

        function ocultarSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.add('hidden');
        }

        function mostrarSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.remove('hidden');
        }
    </script>
</body>
</html>
