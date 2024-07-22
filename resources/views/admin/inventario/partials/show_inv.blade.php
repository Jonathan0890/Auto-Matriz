@extends('test.layout')

@section('title')
    INVENTARIO
@endSection

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8"">
            <div class="p-4">
                <h2 class="text-2xl font-semibold mb-6 text-center">INVENTARIO</h2>
                <div class="grid grid-cols-1 gap-4">

                    <div>
                        <label class="text-gray-600">Folio:</label>
                        <p class="text-gray-800 tracking-normal">{{ $inventario->folio_inventario }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Clave Unica:</label>
                        <p class="text-gray-800 tracking-normal">{{ $inventario->clave_unica_producto }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Descripcion:</label>
                        <p class="text-gray-800 tracking-normal">{{ $inventario->descripcion_producto }}</p>
                    </div>
                    <div>
                        <label class="text-gray-600">Cantidad:</label>
                        <p class="text-gray-800 tracking-normal">{{ $inventario->cantidad }}</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <a href="{{ route('inventario.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Volver</a>
            </div>
        </div>
    </div>
