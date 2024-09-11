@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen px-4">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-4xl">
            <h2 class="text-3xl font-semibold mb-8 text-center">Editar Presupuesto</h2>
            <form action="{{ route('presupuesto.update', $presupuesto->id) }}" class="grid grid-cols-1 gap-6 md:grid-cols-2"
                method="POST">
                @csrf @method('PUT')
                <!-- Fecha -->
                <div class="mb-4">
                    <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                    <input value="{{ $presupuesto->fecha }}" type="date" name="fecha" id="fecha"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Razon Social -->
                <div class="mb-4">
                    <label for="razon_social" class="block text-gray-700 text-sm font-bold mb-2">Razon Social:</label>
                    <input value="{{ $presupuesto->razon_social }}" type="text" name="razon_social" id="razon_social"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Estado -->
                <div class="mb-4">
                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                    <input value="{{ $presupuesto->estado }}" type="text" name="estado" id="estado"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Numero de Orden -->
                <div class="mb-4">
                    <label for="no_orden" class="block text-gray-700 text-sm font-bold mb-2">Numero de Orden:</label>
                    <input value="{{ $presupuesto->no_orden }}" type="text" name="no_orden" id="no_orden"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Vehiculo -->
                <div class="mb-4">
                    <label for="vehiculo" class="block text-gray-700 text-sm font-bold mb-2">Vehiculo:</label>
                    <input value="{{ $presupuesto->vehiculo }}" type="text" name="vehiculo" id="vehiculo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Modelo -->
                <div class="mb-4">
                    <label for="modelo" class="block text-gray-700 text-sm font-bold mb-2">Modelo:</label>
                    <input value="{{ $presupuesto->modelo }}" type="text" name="modelo" id="modelo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Año -->
                <div class="mb-4">
                    <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Año:</label>
                    <input value="{{ $presupuesto->year }}" type="text" name="year" id="year"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Placas -->
                <div class="mb-4">
                    <label for="placa" class="block text-gray-700 text-sm font-bold mb-2">Placa:</label>
                    <input value="{{ $presupuesto->placa }}" type="text" name="placa" id="placa"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Reporte del Cliente -->
                <div class="mb-4">
                    <label for="reporte_cliente" class="block text-gray-700 text-sm font-bold mb-2">Reporte de
                        Cliente:</label>
                    <textarea name="reporte_cliente" id="reporte_cliente"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $presupuesto->reporte_cliente }}</textarea>
                </div>

                <!-- Kilometraje -->
                <div class="mb-4">
                    <label for="kilometraje" class="block text-gray-700 text-sm font-bold mb-2">Kilometraje:</label>
                    <input value="{{ $presupuesto->kilometraje }}" type="text" name="kilometraje" id="kilometraje"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Numero Economico -->
                <div class="mb-4">
                    <label for="no_economico" class="block text-gray-700 text-sm font-bold mb-2">Numero Economico:</label>
                    <input value="{{ $presupuesto->no_economico }}" type="text" name="no_economico" id="no_economico"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Sub Total -->
                <div class="mb-4">
                    <label for="sub_total" class="block text-gray-700 text-sm font-bold mb-2">Sub Total:</label>
                    <input value="{{ $presupuesto->sub_total }}" type="text" name="sub_total" id="sub_total"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Impuestos -->
                <div class="mb-4">
                    <label for="impuestos" class="block text-gray-700 text-sm font-bold mb-2">Impuestos:</label>
                    <input value="{{ $presupuesto->impuestos }}" type="text" name="impuestos" id="impuestos"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Total -->
                <div class="mb-4">
                    <label for="total" class="block text-gray-700 text-sm font-bold mb-2">Total:</label>
                    <input value="{{ $presupuesto->total }}" type="text" name="total" id="total"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Botón Guardar -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                </div>
            </form>

        </div>
    </div>
@endsection
