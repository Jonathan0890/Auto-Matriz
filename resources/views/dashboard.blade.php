<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



<aside class="bg-gray-800 text-white h-screen         rounded-md shadow-md">
    <div class="flex items-center justify-between p-5 bg-white text-gray-800">
        <div class="flex gap-2 items-center">
            <img src="../../../assets/facebook.svg" alt="logo" class="w-8 h-8">
            <h2 class="text-lg font-bold">HOLA MUNDO<span class="text-red-500"> TOR</span></h2>
        </div>
        <div class="cursor-pointer">
            <span class="material-symbols-outlined">
                close
            </span>
        </div>
    </div>
    <div class="flex flex-col gap-3 mt-5">
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                dashboard
            </span>
            <h3>Dashboard</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                person
            </span>
            <h3>Customer</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                receipt_long
            </span>
            <h3>Ordenes</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                mail
            </span>
            <h3>Mensajes</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                report
            </span>
            <h3>Reportes</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 hover:bg-gray-700">
            <span class="material-symbols-outlined">
                settings
            </span>
            <h3>Configuración</h3>
        </a>
        <a href="#" class="flex items-center gap-2 px-5 py-2 mt-auto hover:bg-gray-700">
            <span class="material-symbols-outlined">
                settings
            </span>
            <h3>Cerrar Sesion</h3>
        </a>
    </div>
</aside>