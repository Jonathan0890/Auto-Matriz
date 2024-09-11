@extends('test.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-8">
            <h2 class="text-3xl font-semibold mb-8 text-center">EDITAR CREDITO</h2>
            <form action="{{ route('creditos.update', $credito->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
    
                <!-- Fecha -->
                <div class="mb-4">
                    <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $credito->fecha->format('Y-m-d')) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('fecha')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Razon Social -->
                <div class="mb-4">
                    <label for="razon_social" class="block text-gray-700 text-sm font-bold mb-2">Razon Social</label>
                    <input type="text" name="razon_social" id="razon_social" value="{{ old('razon_social', $credito->razon_social) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('razon_social')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- RFC -->
                <div class="mb-4">
                    <label for="RFC" class="block text-gray-700 text-sm font-bold mb-2">RFC</label>
                    <input type="text" name="RFC" id="RFC" value="{{ old('RFC', $credito->RFC) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('RFC')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Numero de Orden -->
                <div class="mb-4">
                    <label for="no_orden" class="block text-gray-700 text-sm font-bold mb-2">Número de Orden</label>
                    <input type="text" name="no_orden" id="no_orden" value="{{ old('no_orden', $credito->no_orden) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('no_orden')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Dias Restantes -->
                <div class="mb-4">
                    <label for="dias_restantes" class="block text-gray-700 text-sm font-bold mb-2">Días Restantes</label>
                    <input type="number" name="dias_restantes" id="dias_restantes" value="{{ old('dias_restantes', $credito->dias_restantes) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('dias_restantes')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Vehículo -->
                <div class="mb-4">
                    <label for="vehiculo" class="block text-gray-700 text-sm font-bold mb-2">Vehículo</label>
                    <input type="text" name="vehiculo" id="vehiculo" value="{{ old('vehiculo', $credito->vehiculo) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('vehiculo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Modelo -->
                <div class="mb-4">
                    <label for="modelo" class="block text-gray-700 text-sm font-bold mb-2">Modelo</label>
                    <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $credito->modelo) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('modelo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Año -->
                <div class="mb-4">
                    <label for="anio" class="block text-gray-700 text-sm font-bold mb-2">Año</label>
                    <input type="number" name="anio" id="anio" value="{{ old('anio', $credito->anio) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('anio')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Placa -->
                <div class="mb-4">
                    <label for="placa" class="block text-gray-700 text-sm font-bold mb-2">Placa</label>
                    <input type="text" name="placa" id="placa" value="{{ old('placa', $credito->placa) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('placa')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Anticipo -->
                <div class="mb-4">
                    <label for="anticipo" class="block text-gray-700 text-sm font-bold mb-2">Anticipo</label>
                    <input type="number" step="0.01" name="anticipo" id="anticipo" value="{{ old('anticipo', $credito->anticipo) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('anticipo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Por Pagar -->
                <div class="mb-4">
                    <label for="por_pagar" class="block text-gray-700 text-sm font-bold mb-2">Por Pagar</label>
                    <input type="number" step="0.01" name="por_pagar" id="por_pagar" value="{{ old('por_pagar', $credito->por_pagar) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('por_pagar')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Total -->
                <div class="mb-4">
                    <label for="total" class="block text-gray-700 text-sm font-bold mb-2">Total</label>
                    <input type="number" step="0.01" name="total" id="total" value="{{ old('total', $credito->total) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @error('total')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Botón Guardar -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endSection
