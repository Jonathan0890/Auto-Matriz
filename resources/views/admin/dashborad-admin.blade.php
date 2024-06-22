@extends('template.template_admin')

@section('title')
Dashboard
@endSection

@section('content')
<body class="w-screen h-screen bg-gray-100 text-sm font-sans overflow-x-hidden ">
    <div class="flex w-[120%] mx-auto gap-6">
        <main class="ml-30 p-2 flex-1">
            <h1 class="text-2xl font-bold mb-3">Dashboard</h1>
            <div class="bg-gray-200 inline-block rounded-lg px-4 py-2 mb-5">
                <input type="date" class="bg-transparent text-gray-800">
            </div>
            <div class="grid grid-cols-4 gap-10">
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-teal-500 text-white p-2 rounded-full text-3xl mb-3">
                        analytics
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Ventas</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mt-4">
                        <svg class="absolute inset-0">
                            <circle cx="38" cy="38" r="36" class="stroke-teal-500 stroke-[14px] stroke-dasharray-[100] stroke-dashoffset-[-30] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>81</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
                <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-red-500 text-white p-2 rounded-full text-4xl mb-3">
                        bar_chart
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Impuestos</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mt-4">
                        <svg class="absolute inset-0">
                            <circle cx="38" cy="38" r="36" class="stroke-red-500 stroke-[14px] stroke-dasharray-[80] stroke-dashoffset-[20] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>70</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
                <div class="bg-white p-7 rounded-2xl shadow-lg hover:shadow-none transition-shadow duration-300">
                    <span class="material-symbols-outlined bg-green-500 text-white p-2 rounded-full text-4xl mb-3">
                        analytics
                    </span>
                    <div class="flex items-center justify-between">
                        <div class="mt-3">
                            <h3 class="text-lg font-medium">Total de Ventas</h3>
                            <h1 class="text-2xl font-bold">$25,000</h1>
                        </div>
                    </div>
                    <div class="relative w-24 h-24 mt-4">
                        <svg class="absolute inset-0">
                            <circle cx="38" cy="38" r="36" class="stroke-green-500 stroke-[14px] stroke-dasharray-[110] stroke-dashoffset-[35] fill-none"></circle>
                        </svg>
                        <div class="absolute inset-0 flex justify-center items-center text-lg">
                            <p>40</p>
                        </div>
                    </div>
                    <small class="block mt-5 text-gray-500">Last 24 Hours</small>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">Recent Orders</h2>
                <table class="w-[80%] bg-white rounded-2xl p-7 shadow-lg hover:shadow-none transition-shadow duration-300">
                    <thead>
                        <tr class="text-left">
                            <th class="py-2">Product</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-2">Foldable Mini Drone</td>
                            <td>Elon Musk</td>
                            <td>30-09-2021</td>
                            <td class="text-yellow-500">Pending</td>
                            <td class="text-blue-500">Details</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2">Foldable Mini Drone</td>
                            <td>Elon Musk</td>
                            <td>30-09-2021</td>
                            <td class="text-yellow-500">Pending</td>
                            <td class="text-blue-500">Details</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2">Foldable Mini Drone</td>
                            <td>Elon Musk</td>
                            <td>30-09-2021</td>
                            <td class="text-yellow-500">Pending</td>
                            <td class="text-blue-500">Details</td>
                        </tr>
                        <tr>
                            <td class="py-2">Foldable Mini Drone</td>
                            <td>Elon Musk</td>
                            <td>30-09-2021</td>
                            <td class="text-yellow-500">Pending</td>
                            <td class="text-blue-500">Details</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
@endSection
