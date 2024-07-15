@extends('template.template_user')

@section('title')
    Servicio
@endsection

@section('content')
    <div class="container mx-auto text-white mt-[80px]">
        <!-- Paquetes de Mantenimiento -->
        <div class="mb-[80px]">
            <h1 class="text-4xl text-center font-bold p-4">
                Paquetes de Mantenimiento
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 p-4 mt-[50px]">
                @foreach ($servicios as $servicio)
                    <div
                        class="bg-[#1E293B] p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h2 class="text-2xl font-semibold mb-2 text-white text-center">{{ $servicio->nombre }}</h2>
                        <p class="text-justify mb-4 text-white">
                            {{ $servicio->descripcion }}
                        </p>
                        <p class="text-xl font-bold text-white">
                            Desde: {{ $servicio->precio_desde }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h1 class="text-4xl text-center font-bold p-4">
                Áreas de Trabajo
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4 mt-[50px]">
                @foreach ($areasTrabajo as $areaTrabajo)
                    <div
                        class="bg-[#1E293B] p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h2 class="text-2xl font-semibold mb-4 text-white text-center">{{ $areaTrabajo->nombre }}</h2>
                        <ul class="list-disc list-inside space-y-2">
                            @foreach ($areaTrabajo->subareas as $subarea)
                                <li class="text-lg text-white">{{ $subarea->nombre }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
