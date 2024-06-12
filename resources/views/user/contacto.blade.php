@extends('template.template_user')

@section('title')
    Contacto
@endSection

@section('content')

    <div class="background-image flex items-center justify-center">
        <div class="text-white text-center">
            <div class="mb-4">
                <img src="{{ asset('image.png') }}" alt="Automatriz Logo" class="mx-auto">
                <p class="text-lg">suc28@automatrizz.com</p>
                <p class="text-lg">Tel. 998 607 8601</p>
                <p class="text-lg">Cel. 998 179 5843</p>
                <p class="text-lg">Automatriz Cancun</p>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" target="_blank" class="text-white"><i class="fas fa-envelope"></i></a>
                <a href="#" target="_blank" class="text-white"><i class="fas fa-phone"></i></a>
                <a href="#" target="_blank" class="text-white"><i class="fas fa-mobile-alt"></i></a>
                <a href="#" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                <p class="absolute bottom-0 w-full text-center text-white mb-4">
                    Av. José López Portillo, Mza. 17, Lt. 5 SM. 59
                </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center h-screen">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8151006856324!2d-86.85767435953515!3d21.159755380603663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b86b2182447%3A0xbcf46600024ea8d1!2sAUTO%20MATRIZ%20SA%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1718207969008!5m2!1ses-419!2smx"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
