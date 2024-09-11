@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">Editar Orden de Servicio</h2>
            <form action="{{ route('ordenservicio.update', $ordeneserv->id) }}"
                method="POST" class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
                    <input value="{{ $ordeneserv->fecha }}" type="date" name="fecha" id="fecha"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="razon_social" class="block text-gray-700 text-sm font-bold mb-2">Razon Social</label>
                    <input value="{{ $ordeneserv->razon_social }}" type="text" name="razon_social" id="razon_social"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                    <input value="{{ $ordeneserv->estado }}" type="text" name="estado" id="estado"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="no_orden" class="block text-gray-700 text-sm font-bold mb-2">Numero de orden</label>
                    <input value="{{ $ordeneserv->no_orden }}" type="text" name="no_orden" id="no_orden"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="vehiculo" class="block text-gray-700 text-sm font-bold mb-2">Vehiculo</label>
                    <input value="{{ $ordeneserv->vehiculo }}" type="text" name="vehiculo" id="vehiculo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="modelo" class="block text-gray-700 text-sm font-bold mb-2">Modelo</label>
                    <input value="{{ $ordeneserv->modelo }}" type="text" name="modelo" id="modelo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="anio" class="block text-gray-700 text-sm font-bold mb-2">Año</label>
                    <input value="{{ $ordeneserv->anio }}" type="text" name="anio" id="anio"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="placa" class="block text-gray-700 text-sm font-bold mb-2">Placa</label>
                    <input value="{{ $ordeneserv->placa }}" type="text" name="placa" id="placa"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="reporte_cliente" class="block text-gray-700 text-sm font-bold mb-2">Reporte Cliente</label>
                    <input value="{{ $ordeneserv->reporte_cliente }}" type="text" name="reporte_cliente" id="reporte_cliente"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="kilometraje" class="block text-gray-700 text-sm font-bold mb-2">Kilometraje</label>
                    <input value="{{ $ordeneserv->kilometraje }}" type="text" name="kilometraje" id="kilometraje"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="no_economico" class="block text-gray-700 text-sm font-bold mb-2">No Economico</label>
                    <input value="{{ $ordeneserv->no_economico }}" type="text" name="no_economico" id="no_economico"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="sub_total" class="block text-gray-700 text-sm font-bold mb-2">Sub Total</label>
                    <input value="{{ $ordeneserv->sub_total }}" type="text" name="sub_total" id="sub_total"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mt-4">
                    <label for="impuestos" class="block text-gray-700 text-sm font-bold mb-2">Impuestos</label>
                    <input value="{{ $ordeneserv->impuestos }}" type="text" name="impuestos" id="impuestos"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="total" class="block text-gray-700 text-sm font-bold mb-2">Total:</label>
                    <input value="{{ $ordeneserv->total }}" type="text" name="total" id="total"
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
