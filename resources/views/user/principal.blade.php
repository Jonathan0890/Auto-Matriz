@extends('template.template_user')

@section('content')
    <div class="container mx-auto text-white">
        <div class="mt-6">
            <div class="flex flex-col items-center p-6">
                <img src="{{ asset('prin-uno.jpg') }}" alt="">
                <div class="p-4 text-center">
                    <p class="mt-8 text-3xl">Somos una empresa con más de 15 años de experiencia en el ramo automotriz y
                        con muchas<br> ganas de atender las necesidades de sus autos con profesionalismo, eficacia y honestidad.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-[80px] flex items-center justify-center">
            <div class=" w-1/2 p-4">
                <h1 class="text-3xl">Servicios Posteriores</h1>
                <p class="mt-4 ">XD<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>Totam dignissimos
                    maiores cum perferendis repellat, voluptatum obcaecati! Saepe,<br>necessitatibus. Totam repellendus
                    tenetur nostrum fuga esse officia placeat distinctio sed porro tempora.</p>
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-dos.jpg') }}" alt="" class="mx-auto w-[400px] h-[250px]">
            </div>
        </div>

        <div class="mt-[80px] flex items-center justify-center">
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-tres.jpg') }}" alt="" class="mx-auto">
            </div>
            <div class=" w-1/2 p-4">
                <h1 class="text-3xl">Servicios Posteriores</h1>
                <p class="mt-4">XD<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>Totam dignissimos
                    maiores cum perferendis repellat, voluptatum obcaecati! Saepe,<br>necessitatibus. Totam repellendus
                    tenetur nostrum fuga esse officia placeat distinctio sed porro tempora.</p>
            </div>
        </div>

        <div class="mt-[80px] flex items-center justify-center">
            <div class=" w-1/2 p-4">
                <p class="mt-4 text-3xl">Así mismo en Automatriz queremos 
                    invitarle a llevar un control oportuno del 
                    mantenimiento de su auto o flotilla.
                </p>
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('prin-cuatro-uno.png') }}" alt="" class="mx-auto">
            </div>
        </div>

        <div class="mt-10">
            <div class="flex flex-col items-center p-6">
                <img src="{{ asset('marcas.png') }}" alt="" class="mx-auto w-[80%] h-[80%]">
                <div class="p-4 ">
                    <p class="mt-8 text-2xl">
                        Nuestro personal técnico está altamente calificado en su área de trabajo, logrando una inigualable calidad en la mano de obra.  <br>
                        Además, nuestro personal administrativo cuenta con años de experiencia en el control del mantenimiento de flotillas de empresas <br>
                        como CFE, Cemex, Johnson Controls, Axa Seguros, Bayer, Ariza de México, GE Capital, Master Fleet, Lease Plan, entre otras. <br>
                        Por lo tanto, sabemos exactamente lo que hacemos.
                    </p>                    
                </div>
            </div>
        </div>
    </div>
@endsection
