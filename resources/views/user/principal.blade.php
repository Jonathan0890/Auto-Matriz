@extends('template.template_user')

@section('content')
    <div class="container mx-auto text-white">
        <div class="mt-6">
            <div class="flex flex-col items-center p-6">
                <img src="{{ asset('descargar.jpg') }}" height="200" width="200" alt="">
                <div class="p-4 text-center">
                    <p class="mt-8 ">Somos una empresa con más de 15 años de experiencia en el ramo automotriz y
                        con muchas ganas de atender las necesidades de sus autos con profesionalismo, eficacia y honestidad.
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
                <img src="{{ asset('descargar.jpg') }}" alt="" class="mx-auto">
            </div>
        </div>

        <div class="mt-[80px] flex items-center justify-center">
            <div class="w-1/2 p-4">
                <img src="{{ asset('descargar.jpg') }}" alt="" class="mx-auto">
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
                <h1 class="text-3xl">Servicios Posteriores</h1>
                <p class="mt-4">XD<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>Totam dignissimos
                    maiores cum perferendis repellat, voluptatum obcaecati! Saepe,<br>necessitatibus. Totam repellendus
                    tenetur nostrum fuga esse officia placeat distinctio sed porro tempora.</p>
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('descargar.jpg') }}" alt="" class="mx-auto">
            </div>
        </div>

        <div class="mt-[80px] flex items-start ">
            <div class="w-1/2 p-4">
                <img src="{{ asset('descargar.jpg') }}" alt="" class="mx-auto">
            </div>
            <div class="w-[70%] p-[40px]">
                <h1 class="text-3xl">Servicios Posteriores Prueba de todas</h1>
                <p class="mt-4">XD<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>Totam dignissimos
                    maiores cum perferendis repellat, voluptatum obcaecati! Saepe,<br>necessitatibus. Totam repellendus
                    tenetur nostrum fuga esse officia placeat distinctio sed porro tempora.</p>
            </div>
        </div>

        <div class="mt-6">
            <div class="flex flex-col items-center p-6">
                <img src="{{ asset('descargar.jpg') }}" alt="" class="mx-auto">
                <div class="p-4 text-center">
                    <p class="mt-8 text-2xl">Somos una empresa con más de 15 años de experiencia en el ramo automotriz y con
                        muchas ganas de atender las necesidades de sus autos con profesionalismo, eficacia y honestidad.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
