@extends ('template.template_user')

@section('content')
    <style>
        .hidden {
            display: none;
        }

        .transition {
            transition: max-height 0.3s ease;
            overflow: hidden;
        }
    </style>

    <section class="container mx-auto mt-[100px]">
        <div class="bg-gray-500 text-2xl text-white rounded-t-lg mb-[75px] ">
            <h1 class="cursor-pointer p-4" onclick="toggleSection(this)">Misión</h1>
            <div class="p-4 hidden transition text-center">
                <p>
                    Ser una empresa rentable con crecimiento y mejora continua mediante procesos sustentados <br>
                    ofreciendo un servicio de la más alta calidad basada en los valores de un equipo de profesionales <br>
                    capacitados y enfocados en la satisfacción del cliente.
                </p>
            </div>
        </div>
        <div class="bg-gray-500 text-2xl text-white rounded-lg mb-[75px] ">
            <h1 class="cursor-pointer p-4 " onclick="toggleSection(this)">Visión</h1>
            <div class="p-4 hidden transition text-center">
                <p>Lograr ser la primera opción para nuestros clientes en servicio automotriz y bodyshop multimarca</p>
            </div>
        </div>
        <div class="bg-gray-500 text-2xl text-white rounded-b-lg mb-[75px] ">
            <h1 class="cursor-pointer p-4 " onclick="toggleSection(this)">Valores</h1>
            <div class="p-4 hidden transition">
                <ul class="list-disc list-inside grid grid-cols-2 gap-x-8 gap-y-2 ">
                    <li>Seguridad</li>
                    <li>Respeto</li>
                    <li>Honestidad</li>
                    <li>Cuidado del medio ambiente</li>
                    <li>Atención al cliente</li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-500 text-2xl text-white rounded-t-lg mb-[75px] ">
            <h1 class="cursor-pointer p-4" onclick="toggleSection(this)">Historia</h1>
            <div class="p-4 hidden transition text-center">
                <p>
                    Nuestra empresa fue fundada en 2018 por un equipo de profesionales de la mejor manera posible.
                </p>
            </div>
        </div>
        
    </section>

    <script>
        function toggleSection(element) {
            const allSections = document.querySelectorAll('.transition');
            const content = element.nextElementSibling;

            allSections.forEach(section => {
                if (section !== content) {
                    section.classList.add('hidden');
                }
            });
            content.classList.toggle('hidden');
        }
    </script>
@endsection
