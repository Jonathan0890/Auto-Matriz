@extends('test.layout')

@section('title')
    ORDEN SERVICIO
@endSection

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">Información del Mensaje</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="text-gray-600">Nombre:</label>
                    <p class="text-xl text-gray-800">{{ $mensaje->nombre }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Email:</label>
                    <p class="text-xl text-gray-800">{{ $mensaje->email }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Mensaje:</label>
                    <p class="text-xl text-gray-800">{{ $mensaje->mensaje }}</p>
                </div>
            </div>
            <div>
                <a href="{{route('mensaje.index')}}"
                    class="bg-indigo-500 text-white py-3 px-6 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a></a>
            </div>
        </div>
    </div>
@endSection
