<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- Sweet Alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <script src="sweetalert2/dist/sweetalert2.all.min.js"></script> -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')

        @livewireScripts

        <script>
            // menu item Live Demo in header.blade.php
            document.querySelector(".one").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
            // two and three are in Hero button in hero.blade.php
            document.querySelector(".two").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            document.querySelector(".three").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
              
            // four and five are in alternatFeature.blade.php
            document.querySelector(".four").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            document.querySelector(".five").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            //  pricing block in components
            document.querySelector(".six").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            // cta.blade.php
            document.querySelector(".seven").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            // footer.blade.php
            document.querySelector(".eight").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

            // mobile menu item in header.blade.php
            document.querySelector(".nine").addEventListener('click', function(){ 
            Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
            showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
        
        
        </script>
    </body>
</html>
