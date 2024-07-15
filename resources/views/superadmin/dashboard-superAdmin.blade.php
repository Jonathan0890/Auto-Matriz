@extends('template.template_super-admin')

@section('title')
Dashboard super
@endsection

@section('content')
<body class="w-screen h-screen bg-gray-100 text-sm font-sans overflow-x-hidden">
    <div class="flex w-full mx-auto gap-6">
        <main class="ml-8 p-2 flex-1">
            <h1 class="text-2xl font-bold mb-3">DASHBBORD SUPERADMIN</h1>
            <div>
                @include('components.temp-section')
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-teal-500 text-white p-2 rounded-full text-3xl mb-3">
                        Analisis
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Ventas</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mx-auto mt-4">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <circle cx="50" cy="50" r="45" class="stroke-teal-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[56.52] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>81%</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
                <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-red-500 text-white p-2 rounded-full text-4xl mb-3">
                        Pagos
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Impuestos</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mx-auto mt-4">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <circle cx="50" cy="50" r="45" class="stroke-red-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[84.78] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>70%</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
                <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-green-500 text-white p-2 rounded-full text-4xl mb-3">
                        Ventas
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Total de Ventas</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mx-auto mt-4">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
                            <circle cx="50" cy="50" r="45" class="stroke-green-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[169.56] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>40%</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">Recent Orders</h2>
                <table class="w-full text-center bg-white rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-3 text-sm font-semibold text-gray-700">Asunto</th>
                            <th class="py-3 text-sm font-semibold text-gray-700">Cliente</th>
                            <th class="py-3 text-sm font-semibold text-gray-700">Fecha</th>
                            <th class="py-3 text-sm font-semibold text-gray-700">Estado</th>
                            <th class="py-3 text-sm font-semibold text-gray-700"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                            <td class="py-4">Solicitud de Crédito</td>
                            <td>Pedro Gómez</td>
                            <td>05-04-2023</td>
                            <td class="text-green-500">Aprobado</td>
                            <td class="text-blue-500 cursor-pointer hover:underline">Detalles</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                            <td class="py-4">Compra de Paquete</td>
                            <td>Laura Hernández</td>
                            <td>12-06-2023</td>
                            <td class="text-red-500">Rechazado</td>
                            <td class="text-blue-500 cursor-pointer hover:underline">Detalles</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                            <td class="py-4">Revisión de Reporte</td>
                            <td>Jorge Martínez</td>
                            <td>18-07-2023</td>
                            <td class="text-yellow-500">En Proceso</td>
                            <td class="text-blue-500 cursor-pointer hover:underline">Detalles</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4">Actualización de Servicios</td>
                            <td>Andrea Silva</td>
                            <td>30-08-2023</td>
                            <td class="text-blue-500">Pendiente</td>
                            <td class="text-blue-500 cursor-pointer hover:underline">Detalles</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </main>
    </div>

    @stack('scripts')
</body>
@endsection
