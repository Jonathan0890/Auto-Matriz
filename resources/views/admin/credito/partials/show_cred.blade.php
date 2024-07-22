@extends('test.layout')

@section('content')
    <div class="Flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full md:w-3/4 mx-auto p-6">
            <div class="p-4">
                <h2 class="text-3xl font-semibold mb-8 text-center">Información del Crédito</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="text-gray-600">Fecha:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->fecha }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Razón Social:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->razon_social }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">RFC:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->RFC }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Número de Orden:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->no_orden }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Días Restantes:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->dias_restantes }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Vehículo:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->vehiculo }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Modelo:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->modelo }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Año:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->anio }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Placa:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->placas }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Anticipo:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->anticipo }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Por Pagar:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->por_pagar }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Total:</label>
                        <p class="text-gray-800 tracking-normal">{{ $credito->total }}</p>
                    </div>
                    <div class="mt-6 items-center justify-center">
                        <a href="{{ route('creditos.index') }}"
                            class="bg-indigo-500 text-center text-white py-2 px-4 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
