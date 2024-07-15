<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DataTables CSS -->
    
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
</head>

<body class="flex overflow-x-hidden bg-[#DDE6ED]">
    <div id="sidebar" class="w-64 min-h-screen fixed bg-gray-800 text-white flex flex-col transition-all duration-300">
        <div class="p-4">
            <button id="menu-toggle" class="text-white">
                <i id="menu-icon" class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="flex flex-col items-center p-4">
            <div class="mb-6 rounded-circle">
                <a href="/">
                    <img src="{{ asset('image.png') }}" alt="Logo" class="w-[200px] h-[100px]" id="sidebar-logo">
                </a>
            </div>
            <nav class="w-full">
                <ul id="menu-items" class="flex flex-col w-full">
                    <li class="w-full">
                        <a href="{{ url('/admin') }}" class="block px-14 py-2 hover:bg-gray-700">
                            <i class="fa-solid fa-house mr-2"></i>Inicio
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/factura') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-file-invoice-dollar mr-2"></i>Factura
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/mensaje') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-envelope mr-2"></i>Mensajes
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/inventario') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-boxes-stacked mr-2"></i>Inventario
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/presupuesto') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-file-invoice mr-2"></i>Presupuesto
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/orden-servicio') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-clipboard-list mr-2"></i>Orden Servicio
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/credito') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-credit-card mr-2"></i>Crédito
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/paquetes') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-box-open mr-2"></i>Paquetes
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/admin/report') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-chart-line mr-2"></i>Reporte
                        </a>
                    </li>
                    <li class="w-full">
                        <a href="{{ url('/logout') }}" class="block px-14 py-4 hover:bg-gray-700">
                            <i class="fa-solid fa-sign-out-alt mr-2"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>


    <div id="content" class="flex-1 ml-64 p-6 transition-all duration-300">
        <div class="flex-col justify-center">
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const menuIcon = document.getElementById('menu-icon');
            const menuItems = document.getElementById('menu-items');
            const sidebarLogo = document.getElementById('sidebar-logo');

            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('w-64');
                sidebar.classList.toggle('w-16');
                menuItems.classList.toggle('hidden');
                sidebarLogo.classList.toggle('hidden');
                content.classList.toggle('ml-64');
                content.classList.toggle('ml-16');

                if (menuIcon.classList.contains('fa-bars')) {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                } else {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                }
            });
        });
    </script>



    @stack('scripts')

</body>

</html>
