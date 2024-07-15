@extends('template.template_admin')

@section('title')
    DASHBOARD
@endsection

@section('content')

    <body class="w-screen h-screen bg-gray-100 text-sm font-sans overflow-x-hidden">
        <div class="flex w-full mx-auto gap-6">
            <main class="ml-8 p-2 flex-1">
                <h1 class="text-2xl font-bold mb-3">DASHBOARD</h1>
                <div>
                    @include('components.temp-section')
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                        <span class="material-symbols-outlined bg-teal-500 text-white p-2 rounded-full text-3xl mb-3">
                            Análisis </span>
                        <div class="flex items-center justify-between">
                            <div class="mt-3">
                                <h3 class="text-lg font-medium">Ventas</h3>
                                <h1 class="text-2xl font-bold">$60,000</h1>
                            </div>
                        </div>
                        <div class="relative w-24 h-24 mx-auto mt-4">
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <circle cx="50" cy="50" r="45"
                                    class="stroke-teal-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[56.52] fill-none">
                                </circle>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center text-lg">
                                <p>81%</p>
                            </div>
                        </div>
                        <small class="block mt-5 text-gray-500">Últimas 24 horas</small>
                    </div>
                    <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                        <span class="material-symbols-outlined bg-red-500 text-white p-2 rounded-full text-4xl mb-3">
                            Grafico
                        </span>
                        <div class="flex items-center justify-between">
                            <div class="mt-3">
                                <h3 class="text-lg font-medium">Impuestos</h3>
                                <h1 class="text-2xl font-bold">$20,000</h1>
                            </div>
                        </div>
                        <div class="relative w-24 h-24 mx-auto mt-4">
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <circle cx="50" cy="50" r="45"
                                    class="stroke-red-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[84.78] fill-none">
                                </circle>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center text-lg">
                                <p>70%</p>
                            </div>
                        </div>
                        <small class="block mt-5 text-gray-500">Últimas 24 horas</small>
                    </div>
                    <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                        <span class="material-symbols-outlined bg-green-500 text-white p-2 rounded-full text-4xl mb-3">
                            Total
                        </span>
                        <div class="flex items-center justify-between">
                            <div class="mt-3">
                                <h3 class="text-lg font-medium">Total de Ventas</h3>
                                <h1 class="text-2xl font-bold">$90,000</h1>
                            </div>
                        </div>
                        <div class="relative w-24 h-24 mx-auto mt-4">
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <circle cx="50" cy="50" r="45"
                                    class="stroke-green-500 stroke-[10px] stroke-dasharray-[282.6] stroke-dashoffset-[169.56] fill-none">
                                </circle>
                            </svg>
                            <div class="absolute inset-0 flex justify-center items-center text-lg">
                                <p>40%</p>
                            </div>
                        </div>
                        <small class="block mt-5 text-gray-500">Últimas 24 horas</small>
                    </div>
                </div>
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4">Recent Orders</h2>
                    <table class="w-full text-center bg-white rounded-2xl p-7 shadow-lg hover:shadow-none transition-shadow duration-300">
                        <thead class="">
                            <tr >
                                <th class="py-2">Asunto</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="py-2">Crédito Personal</td>
                                <td>Juan Pérez</td>
                                <td>15-05-2023</td>
                                <td class="text-green-500">Completado</td>
                                <td class="text-blue-500">Detalles</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="py-2">Paquete Vacacional</td>
                                <td>Maria García</td>
                                <td>20-06-2023</td>
                                <td class="text-red-500">Cancelado</td>
                                <td class="text-blue-500">Detalles</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="py-2">Reporte de Ventas</td>
                                <td>Carlos López</td>
                                <td>10-07-2023</td>
                                <td class="text-yellow-500">Pendiente</td>
                                <td class="text-blue-500">Detalles</td>
                            </tr>
                            <tr>
                                <td class="py-2">Paquete de Servicios</td>
                                <td>Lucia Martínez</td>
                                <td>25-08-2023</td>
                                <td class="text-blue-500">En Progreso</td>
                                <td class="text-blue-500">Detalles</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </main>
        </div>

        @stack('scripts')
    </body>
@endsection
