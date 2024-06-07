@extends('template.template_user')

@section('content')
    <div>
        <div class="mt-6 ">
            <div class="parent-div p-6">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                    height="200" width="200" alt="">
                <div class="child-div p-4">
                    <p class="mt-8 text-gray-700">Somos una empresa con más de 15 años de experiencia en el ramo auto
                        motriz y con muchas ganas de atender las necesidades de sus autos con
                        profesionalismo, eficacia y honestidad.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-4 flex">
            <div class="container mx-flex justify-center">
                <h1 class="text-3xl">
                    Servicios Posteriores
                </h1>
                <p class="mt-4">
                    XD
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    <br>
                    Totam dignissimos maiores cum perferendis repellat, voluptatum obcaecati! Saepe,
                    <br>
                    necessitatibus. Totam repellendus tenetur nostrum fuga esse officia placeat distinctio sed porro
                    tempora.
                </p>
            </div>
            <div class="mt-8 bg-gray-500 ">
                <img src="data:image/jpeg;base64,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"
                    alt="">
            </div>
        </div>

        <div class="mt-4 flex items-start">
            <div class="mr-8 bg-gray-500 ">
                <img src="data:image/jpeg;base64,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"
                    alt="">
            </div>
            <div class="container mx-flex items-end">
                <h1 class="text-3xl">
                    Servicios Posteriores
                </h1>
                <p class="mt-4">
                    XD
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    <br>
                    Totam dignissimos maiores cum perferendis repellat, voluptatum obcaecati! Saepe,
                    <br>
                    necessitatibus. Totam repellendus tenetur nostrum fuga esse officia placeat distinctio sed porro
                    tempora.
                </p>
            </div> 
        </div>
        
        <div class="mt-4 flex">
            <div class="container mx-flex justify-center">
                <h1 class="text-3xl">
                    Servicios Posteriores
                </h1>
                <p class="mt-4">
                    XD
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    <br>
                    Totam dignissimos maiores cum perferendis repellat, voluptatum obcaecati! Saepe,
                    <br>
                    necessitatibus. Totam repellendus tenetur nostrum fuga esse officia placeat distinctio sed porro
                    tempora.
                </p>
            </div>
            <div class="mt-8 bg-gray-500 ">
                <img src="data:image/jpeg;base64,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"
                    alt="">
            </div>
        </div>

        <div class="mt-4 flex items-start">
            <div class="mr-8 bg-gray-500 ">
                <img src="{{ asset('descargar.jpg') }}"
                    alt="">
            </div>
            <div class="container mx-flex items-end">
                <h1 class="text-3xl">
                    Servicios Posteriores
                </h1>
                <p class="mt-4">
                    XD
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    <br>
                    Totam dignissimos maiores cum perferendis repellat, voluptatum obcaecati! Saepe,
                    <br>
                    necessitatibus. Totam repellendus tenetur nostrum fuga esse officia placeat distinctio sed porro
                    tempora.
                </p>
            </div> 
        </div>

        <div class="mt-6 ">
            <div class="parent-div p-6">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                    height="200" width="200" alt="">
                <div class="child-div p-4">
                    <p class="mt-8 text-2xl">
                        Somos una empresa con más de 15 años de experiencia en el ramo auto
                        motriz y con muchas ganas de atender las necesidades de sus autos con
                        profesionalismo, eficacia y honestidad.

                    </p>
                </div>
            </div>
        </div>


    </div>
@endsection
