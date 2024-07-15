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
                    Fundada en 2008 bajo el nombre de Proservice, nuestra empresa comenzó su trayectoria con un firme
                    compromiso hacia la calidad <br>en el sector automotriz. Dos años después, en 2010, nos trasladamos al
                    Mercado 23, lo que nos permitió ampliar nuestra capacidad <br>y atender a un mayor número de clientes.

                    En 2013, inauguramos un nuevo taller en la Ciudad de México, expandiendo así <br>nuestra presencia. Un año
                    más tarde, en 2014, adoptamos el nombre Auto Matríz, reflejando una identidad  más moderna y dinámica.<br>En
                    2015, nos mudamos de Cancún a  una nueva ubicación, y en 2017 realizamos otro cambio de ubicación,
                    siempre en busca de <br>mejorar nuestros servicios.

                    En 2018, nombramos a un nuevo representante legal para fortalecer nuestra estructura organizacional. <br>Un
                    año después, en 2019, grandes empresas como Ecolab, Chedraui y Element confiaron en nosotros, ampliando
                    nuestra cartera <br>de clientes. A pesar de la pandemia de COVID-19 en 2020, continuamos operando
                    exitosamente gracias a la dedicación de <br>nuestro equipo y la lealtad de nuestros clientes.

                    Finalmente, en 2022, inauguramos un nuevo taller hermano llamado Multiservicio, reafirmando nuestro
                    compromiso con el crecimiento y la mejora continua en el sector automotriz.
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
