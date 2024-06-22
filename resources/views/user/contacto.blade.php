@extends('template.template_user')

@section('title')
    Contacto
@endSection

@section('content')
<div class="text-zinc-800 dark:text-white min-h-screen flex flex-col items-center">
    <div class="flex flex-row items-start mt-16 space-x-[80px]">
        <div class="bg-zinc-800 dark:bg-zinc-900 rounded-full w-96 h-96 flex items-center justify-center">
            <img src="https://placehold.co/300x150" alt="Automotriz Logo" class="w-64">
        </div>
        <div class="flex flex-col justify-center space-y-6">
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/20x20" alt="Email Icon" class="w-5 h-5">
                <span>suc28@automatriz.com</span>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/20x20" alt="Phone Icon" class="w-5 h-5">
                <span>Tel. 998 607 8601</span>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/20x20" alt="Cell Icon" class="w-5 h-5">
                <span>Cel. 998 179 5843</span>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://placehold.co/20x20" alt="Location Icon" class="w-5 h-5">
                <span>Automatriz Cancun</span>
            </div>
            <div class="flex items-center space-x-6 mt-6">
                <img src="https://placehold.co/20x20" alt="Facebook Icon" class="w-5 h-5">
                <img src="https://placehold.co/20x20" alt="Instagram Icon" class="w-5 h-5">
            </div>
        </div>
    </div>
    <div class="mt-12 text-center">
        <p>Av. José Lópes Portillo, Mza. 17, Lt. 5 SM. 59</p>
    </div>

    <div class="flex justify-center items-center h-screen">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8151006856324!2d-86.85767435953515!3d21.159755380603663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b86b2182447%3A0xbcf46600024ea8d1!2sAUTO%20MATRIZ%20SA%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1718207969008!5m2!1ses-419!2smx"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>


@endsection
