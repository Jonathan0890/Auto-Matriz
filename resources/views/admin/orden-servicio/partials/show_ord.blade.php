@extends('test.layout')

@section('content')
    <div class="Flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full md:w-3/4 mx-auto p-6">
            <div class="p-4">
                <h2 class="text-3xl font-semibold mb-8 text-center">Información de la Orden de Servicio</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="text-gray-600">Fecha:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->fecha }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Razón Social:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->razonsocial }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">RFC:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->estado }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Número de Orden:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->no_orden }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Vehículo:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->vehiculo }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Modelo:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->modelo }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Año:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->anio }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Placa:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->placas }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Kilometros:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->kilometraje }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Numero Economico:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->no_economico }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Sub-Total:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->sub_total }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Impuestos:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->impuestos }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Total:</label>
                        <p class="text-gray-800 tracking-normal">{{ $ordeneserv->total }}</p>
                    </div>
                    <div class="mt-6 items-center justify-center">
                        <a href="{{ route('ordenservicio.index') }}"
                            class="bg-indigo-500 text-center text-white py-2 px-4 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
