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
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

        <!-- Full Calendar  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">

        <!-- Tailwind CDN -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- Full Calendar -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

        <!-- Sweet Alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <script src="sweetalert2/dist/sweetalert2.all.min.js"></script> -->

        <!-- Alpine CDN -->
        <!-- <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLH0NXKC0P"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VLH0NXKC0P');
        </script>

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
