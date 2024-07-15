<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Mensaje</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200">
    <div class="container mx-auto mt-10 px-4">
        <div class="bg-white rounded-lg shadow-lg max-w-5xl mx-auto p-6">
            <div class="p-4">
                <h2 class="text-2xl font-semibold mb-6 text-center">Información del Reporte</h2>
                <div class="grid grid-cols-1 gap-6">
                    <!-- Nombre -->
                    <div>
                        <label class="text-gray-600 block">Nombre:</label>
                        <p class="text-lg text-gray-800">{{ $reporte->nombre }}</p>
                    </div>
                    <!-- Email -->
                    <div>
                        <label class="text-gray-600 block">Email:</label>
                        <p class="text-lg text-gray-800">{{ $reporte->email }}</p>
                    </div>
                    <!-- Tipo -->
                    <div>
                        <label class="text-gray-600 block">Tipo:</label>
                        <p class="text-lg text-gray-800">{{ $reporte->tipo }}</p>
                    </div>
                    <!-- Descripción -->
                    <div>
                        <label class="text-gray-600 block">Descripción:</label>
                        <p class="text-lg text-gray-800">{{ $reporte->descripcion }}</p>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <a href="{{ route('reporte.index') }}"
                        class="bg-indigo-500 text-white py-3 px-6 rounded-lg hover:bg-indigo-600 inline-block">REGRESAR</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
