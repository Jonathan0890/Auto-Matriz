@extends('template.template_user')

@section('title')
    Contacto
@endsection

@section('content')
    <div class="text-zinc-800 dark:text-white min-h-screen flex flex-col items-center">
        <div class="flex flex-col md:flex-row items-start mt-16 space-y-10 md:space-y-0 md:space-x-20">
            <!-- Contenedor de Logo -->
            <div class="w-96 h-96 md:w-[400px] md:h-[200px] flex-shrink-0 md:mr-[200px]">
                <img src="{{ asset('image.png') }}" alt="Automotriz Logo" class="w-full h-full object-contain">
            </div>
            <!-- Información de Contacto -->
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('Correo-cont.png') }}" alt="Email Icon" class="w-8 h-8">
                    <span class="text-xl font-semibold">suc28@automatriz.com</span>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('Telefono.png') }}" alt="Phone Icon" class="w-8 h-8">
                    <span class="text-xl font-semibold">Tel. 998 607 8601</span>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('Telefono2.png') }}" alt="Cell Icon" class="w-8 h-8">
                    <span class="text-xl font-semibold">Cel. 998 179 5843</span>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('Red1.png') }}" alt="Location Icon" class="w-8 h-8">
                    <img src="{{ asset('Red2.png') }}" alt="Location Icon" class="w-8 h-8">
                    <span class="text-xl font-semibold">Automatriz Cancun</span>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <p class="text-xl">Av. José Lópes Portillo, Mza. 17, Lt. 5 SM. 59</p>
        </div>
        
        {{--Botón para mostrar/ocultar componentes  --}}
        <div class="mt-[100px]">
            <button id="toggleComponentsBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Ocultar Soporte
            </button>
        </div>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-20" id="contactComponents">
            @include('components.report-an-issue')
            @include('components.contact-form')
        </div>

        <!-- Mapa -->
        <div class="container mx-auto py-8 rounded-lg mt-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8151006856324!2d-86.85767435953515!3d21.159755380603663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b86b2182447%3A0xbcf46600024ea8d1!2sAUTO%20MATRIZ%20SA%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1718207969008!5m2!1ses-419!2smx"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const components = document.getElementById('contactComponents');
            const toggleBtn = document.getElementById('toggleComponentsBtn');

            // Check LocalStorage for the visibility state
            const isHidden = localStorage.getItem('contactComponentsHidden') === 'true';

            if (isHidden) {
                components.style.display = 'none';
                toggleBtn.textContent = 'Mostrar Soporte';
            } else {
                components.style.display = 'grid';
                toggleBtn.textContent = 'Ocultar Soporte';
            }

            // Add event listener to the button
            toggleBtn.addEventListener('click', function () {
                if (components.style.display === 'none') {
                    components.style.display = 'grid';
                    toggleBtn.textContent = 'Ocultar Soporte';
                    localStorage.setItem('contactComponentsHidden', 'false');
                } else {
                    components.style.display = 'none';
                    toggleBtn.textContent = 'Mostrar Soporte';
                    localStorage.setItem('contactComponentsHidden', 'true');
                }
            });
        });
    </script>
@endsection
