@extends('template.template_user')

@section('title')
    Servicio
@endSection


@section('content')
    <div class="container mx-auto text-white">
        <div>

            <div class="mt-[100px] ">
                <h1 class="text-3xl text-center p-4">
                    Paquetes de Mantenimiento
                </h1>
            </div>

            <div class="grid grid-cols-2 gap-4 p-4 text-xl mt-[50px]">
                <div class="p-4">
                    <h1>Paquete 1</h1>
                    <p class="text-justify ">
                        Cambio de aceite de motor y filtro de <br>
                        aceite Desde:
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 2</h1>
                    <p>
                        Cambio de aceite de motor y filtro de motor +<br>
                        Estética de motor y carrocería Desde:
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 3</h1>
                    <p>
                        Afinacion mayor al motor + Estética de motor <br>
                        + Lavado de carrocería y Aspirado Desde
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 4</h1>
                    <p>
                        Afinacion mayor + Lavado Engrasado + <br>
                        Estética de motor, lavado de carrocería y <br>
                        Aspirado Desde
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 5</h1>
                    <p>
                        Un juego de frenos (Del. O Tras.) + Estética <br>
                        de motor, lavado de carrocería y Aspirado Desde
                    </p>
                </div>
                <div class="p-4 ">
                    <h1>Paquete 6</h1>
                    <p>
                        Cambio de frenos generales + Lavado y engrasado <br>
                        + Estética de motor. Desde
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 7</h1>
                    <p>
                        Cambio de anticongelante + Aceite y Filtro + <br>
                        Estética de motor, Lavado de carrocería Desde: <br>
                        $799 y por solo:
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 8</h1>
                    <p>
                        Pulido encerado y abrillantado de carrocería <br>
                        + rejuvenecimiento de faros + Aspirado Desde
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 9</h1>
                    <p>
                        Servicio completo de lavado y engrasado + <br>
                        Pulido y encerado de carrocería + Estética de <br>
                        motor + Lavado de vestieras Desde:
                    </p>
                </div>
                <div class="p-4">
                    <h1>Paquete 10</h1>
                    <p>
                        Lavado de vestiduras + Estudio de motor + <br>
                        + Lavado de carrocería desde:
                    </p>
                </div>
            </div>

            <div class="mt-[300px] ">
                <h1 class="text-3xl text-center p-4">
                    Areas de Trabajo
                </h1>
            </div>


            <div class="grid grid-cols-3 gap-4 p-4 text-md mt-[50px]">
                <div class="p-4">
                    <h1 class="text-3xl">Mecánica preventiva y correctiva</h1>
                    <p>
                    <ul>
                        <li>Afinaciones</li>
                        <li>Cambio de aceite y filtro</li>
                        <li>Cambio de filtro de aire y gasolina</li>
                        <li>Bujías</li>
                        <li>Bobina y cables de bujías</li>
                        <li>Frenos</li>
                        <li>Clutch</li>
                        <li>Suspensiones completas</li>
                        <li>Dirección hidráulica y mecánica</li>
                        <li>Amortiguadores</li>
                        <li>Rótulas</li>
                        <li>Varillas y terminales de dirección</li>
                        <li>Cajas de dirección</li>
                        <li>Sistema de aire acondicionado</li>
                        <li>Radiadores</li>
                        <li>Mangueras</li>
                        <li>Tomas de agua</li>
                        <li>Bombas de aceite de motor</li>
                        <li>Bomba de gasolina</li>
                        <li>Bomba de dirección hidráulica</li>
                        <li>Cambio de banda dentada de distribución</li>
                        <li>Poleas guías y polea tensora</li>
                        <li>Banda de motor</li>
                        <li>Baleros de ruedas y mazas</li>
                        <li>Flechas (Reparación o cambio)</li>
                        <li>Diferenciales</li>
                        <li>Transmisiones Automáticas o manuales</li>
                        <li>Motor (Reconstruir o cambiar)</li>
                        <li>Cabezas de motor (Reparar)</li>
                        <li>Mofles</li>
                        <li>Extracción de tornillos y mucho más</li>
                    </ul>
                    </p>
                </div>
                <div class="p-4">
                    <h1 class="text-3xl">Sistema eléctrico y electronico</h1>
                    <p>
                    <ul>
                        <li>Marchas</li>
                        <li>Alternadores</li>
                        <li>Baterías</li>
                        <li>Terminales de baterías</li>
                        <li>Sensores</li>
                        <li>Solenoides</li>
                        <li>Electroválvulas</li>
                        <li>Luces</li>
                        <li>Direcciones</li>
                        <li>Motor limpiaparabrisas</li>
                        <li>Sistema de ABS</li>
                        <li>Sistema de bolsas de aire (Airbag)</li>
                        <li>Control electrónico de tracción</li>
                        <li>Computadoras y módulos</li>
                        <li>Cableado</li>
                        <li>Conectores</li>
                        <li>Estéreos</li>
                        <li>Bocinas</li>
                        <li>Antenas</li>
                        <li>Asientos eléctricos</li>
                        <li>Encendedores</li>
                    </ul>
                    </p>
                </div>
                <div class="p-4">
                    <h1 class="text-3xl">Estética automotriz</h1>
                    <p class="mt-4 ">
                    <ul>
                        <li>Lavado de tapicería, asientos, puertas, techos, tableros y alfombras profesional</li>
                        <li>Pulido, encerado y abrillantado de carrocería</li>
                        <li>Descontaminación de pintura</li>
                        <li>Lavado y engrasado de chasis</li>
                        <li>Lavado y estética de motor</li>
                        <li>Servicio de tapicería, reparación de asientos, techos, puertas y volantes</li>
                        <li>Desinfección de interiores y sistema de aire acondicionado</li>
                    </ul>
                    </p>
                    <div class="p-4 items-start ">
                        <h1 class="text-3xl">Hojalateria y Pintura</h1>
                        <p class="mt-4 ">
                            <ul>
                                <li>Pintura general de carrocería</li>
                                <li>Aplicación de anticorrosivo</li>
                                <li>Reparación de golpes y portazos</li>
                                <li>Enderezado de chasis</li>
                                <li>Enderezado de cofres, puertas, salpicaderas, etc.</li>
                                <li>Reparación de fascias</li>
                                <li>Trabajos de soldadura general</li>
                                <li>Extracción de tornillos y birlos</li>
                            </ul>
                        </p>
                    </div>
                    <div class="p-4">
                        <h1 class="text-3xl">Rines y Llantas</h1>
                        <p class="mt-4 ">
                            <ul>
                                <li>Reparación y enderezado de Rines</li>
                                <li>Venta de rines y llantas</li>
                            </ul>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    @endsection
