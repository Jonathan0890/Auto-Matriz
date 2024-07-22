@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">Información del Presupuesto</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="text-gray-600">Fecha:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->fecha }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Razon Social:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->razon_social }}</p>
                </div><div>
                    <label class="text-gray-600">Estado:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->estado }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Numero de Orden:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->no_orden }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Vehiculo:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->vehiculo }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Modelo:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->modelo }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Año:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->year }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Placas:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->placa }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Reporte de cliente:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->reporte }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Kilometraje:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->kilometraje }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Numero Economico:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->no_economico }}</p>
                </div>
                <var><div>
                    <label class="text-gray-600">Sub Total:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->sub_total }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Impuestos:</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->impuestos }}</p>
                </div>
                <div>
                    <label class="text-gray-600">Total</label>
                    <p class="text-xl text-gray-800">{{ $presupuesto->total }}</p>
                </div>
            </div>
            <div class="flex justify-center"></div>
                <a href="{{ route('presupuesto.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Regresar</a>
            </div>
        </div>
    </div>
@endsection
