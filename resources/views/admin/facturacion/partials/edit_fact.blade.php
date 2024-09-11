@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">EDITAR FACTURACION</h2>
            <form action="{{ route('facturacion.update', $facturacion->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="text-gray-600" for="number_factura">Numero de Factura</label>
                        <input
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="number_factura" id="number_factura" value="{{ old('number_factura', $facturacion->number_factura) }}">
                    </div>
                    <div>
                        <label class="text-gray-600" for="cliente_id">Cliente</label>
                        <input
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="cliente_id" id="cliente_id" value="{{ old('cliente_id', $facturacion->cliente_id) }}">
                    </div>
                    <div>
                        <label class="text-gray-600" for="total">Total</label>
                        <input
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="total" id="total" value="{{ old('total', $facturacion->total) }}">
                    </div>
                    <div>
                        <label class="text-gray-600" for="estado">Estado</label>
                        <input
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="estado" id="estado" value="{{ old('estado', $facturacion->estado) }}">
                    </div>
                    <div>
                        <label class="text-gray-600" for="observacion">Observación</label>
                        <input
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="observacion" id="observacion" value="{{ old('observacion', $facturacion->observacion) }}">
                    </div>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Guardar
                    </button>
                    <a href="{{ route('facturacion.index') }}" class="bg-gray-500 text-center text-white py-2 px-4 rounded-lg hover:bg-gray-600 ml-4">
                        Regresar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
