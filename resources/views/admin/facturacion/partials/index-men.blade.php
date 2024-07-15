@extends('test.layout')

@section('content')
<div class="container mx-auto mt-20">
    <div class="bg-white rounded-lg shadow-lg w-full md:w-3/4 mx-auto p-6">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Información de la Facturación</h2>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="text-gray-600">Número de Factura:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->number_factura }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Cliente ID:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->cliente_id }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Fecha de Emisión:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->fecha_emision }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Fecha de Vencimiento:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->fecha_vencimiento }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Total:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->total }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Estado:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->estado }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Observación:</label>
                    <p class="text-gray-800 tracking-normal">{{ $facturacion->observacion }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ route('facturacions.index') }}" class="bg-indigo-500 text-center text-white py-2 px-4 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a>
            </div>
        </div>
    </div>
</div>
@endSection