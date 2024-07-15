@extends('template.template_user')

@section('content')
    <div class="container mx-auto text-white text-2xl  text-center">
        <!-- Sección 1 -->
        <div class="mt-6 flex flex-col items-center p-6">
            <img src="{{ asset('prin-uno.jpg') }}" alt="">
            <div class="p-4 text-center">
                Con más de 15 años de experiencia en el sector automotriz, en nuestra empresa nos destacamos por nuestro
                compromiso con la excelencia y la satisfacción del cliente. Contamos con un equipo técnico altamente
                calificado y dedicado, especializado en ofrecer soluciones integrales para cubrir todas las necesidades
                relacionadas con vehículos. Desde mantenimiento y reparaciones hasta asesoramiento técnico, nuestro objetivo
                es proporcionar un servicio de calidad superior que garantice la seguridad y el rendimiento óptimo de su
                vehículo. Nos esforzamos por mantenernos a la vanguardia de las últimas tecnologías y prácticas del sector,
                asegurando así que cada cliente reciba atención personalizada y resultados que superen sus expectativas.
            </div>
        </div>

        <!-- Sección 2 -->
        <div class="mt-16 flex items-center justify-center">
            <div class="w-1/2 p-4">
                <p class="mt-4 ">
                    Automatriz es mucho más que un centro de servicio vehicular. Es tu solución integral para todas las
                    necesidades relacionadas con tu automóvil. Aquí encontrarás una amplia gama de servicios sin la
                    necesidad de desplazarte de un lugar a otro, asegurando conveniencia y eficiencia en cada visita. </p>
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-dos.jpg') }}" alt="" class="mx-auto w-400 h-250">
            </div>
        </div>

        <!-- Sección 3 -->
        <div class="mt-16 flex items-center justify-center">
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-tres.jpg') }}" alt="" class="mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <p class="mt-4 ">
                    Nuestros servicios abarcan desde el mantenimiento preventivo esencial, como afinaciones, frenos, cambios
                    de aceite y filtro, hasta servicios especializados como lavado y engrasado de chasís, aplicación de
                    anticorrosión, protección de vestiduras y pintura. Además, realizamos reparaciones mayores que incluyen
                    ajustes de motor, solución de fallos en sistemas eléctricos y electrónicos, reparación de alternadores,
                    marchas, radiadores, transmisiones automáticas, cambio de clutch, y sistemas de dirección, entre otros.
                </p>
            </div>
        </div>

        <!-- Sección 4 -->
        <div class="mt-16 flex items-center justify-center">
            <div class="w-1/2 p-4">
                <p class="mt-4 ">
                    No solo nos dedicamos a la mecánica y reparación, sino que también ofrecemos un servicio excepcional de
                    estética, hojalatería y pintura. En Automatriz te garantizamos los mejores precios, servicio y calidad
                    en cada detalle, asegurando que tu vehículo luzca impecable y como nuevo. </p>
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-cuatro-uno.png') }}" alt="" class="mx-auto">
            </div>
        </div>

        <!-- Sección 5 -->
        <div class="mt-10 flex flex-col items-center p-6">
            <img src="{{ asset('marcas.png') }}" alt="" class="mx-auto w-80% h-80%">
            <div class="p-4">
                <p class="mt-8 ">
                    Nuestro equipo técnico no solo está altamente calificado en sus respectivas áreas de especialización,
                    sino que también destacamos por la calidad insuperable de nuestra mano de obra. Además, nuestro personal
                    administrativo aporta años de experiencia en el manejo del mantenimiento de flotillas para empresas de
                    renombre como CFE, Cemex, Johnson Controls, Axa Seguros, Bayer, Ariza de México, GE Capital, Master
                    Fleet, Lease Plan, entre otras. Esto nos permite ofrecer un servicio con conocimiento profundo y
                    eficacia comprobada, asegurando que cada cliente reciba un servicio de primera clase respaldado por
                    experiencia sólida y profesionalismo indiscutible. </p>
            </div>
        </div>
    </div>
@endsection
