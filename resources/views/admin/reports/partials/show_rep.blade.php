@extends('test.layout')

@section('title')
    Información del Reporte
@endsection

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">Información del Reporte</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Nombre -->
                <div>
                    <label class="text-gray-600 block mb-1">Nombre:</label>
                    <p class="text-xl text-gray-800">{{ $reporte->nombre }}</p>
                </div>
                <!-- Email -->
                <div>
                    <label class="text-gray-600 block mb-1">Email:</label>
                    <p class="text-xl text-gray-800">{{ $reporte->email }}</p>
                </div>
                <!-- Tipo -->
                <div>
                    <label class="text-gray-600 block mb-1">Tipo:</label>
                    <p class="text-xl text-gray-800">{{ $reporte->tipo }}</p>
                </div>
                <!-- Descripción -->
                <div class="md:col-span-2">
                    <label class="text-gray-600 block mb-1">Descripción:</label>
                    <p class="text-xl text-gray-800">{{ $reporte->descripcion }}</p>
                </div>
            </div>
            <div class="mt-10 text-center">
                <a href="{{ route('reporte.index') }}"
                    class="bg-indigo-500 text-white py-3 px-6 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a>
            </div>
        </div>
    </div>
@endsection
