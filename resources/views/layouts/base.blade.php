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
		<!-- <link rel="shortcut icon" href="{{ url(asset('img/favicon.ico')) }}"> -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Tailwind CDN -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- Sweet Alert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Alpine js CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLH0NXKC0P"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-VLH0NXKC0P');
        </script>
    </head>

    <body class="font-sans antialiased">
        @yield('body')

        @livewireScripts
        
        <script>
                document.querySelector(".one").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".two").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

                document.querySelector(".three").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".four").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

                document.querySelector(".five").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".six").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".seven").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".eight").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".nine").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                document.querySelector(".ten").addEventListener('click', function(){ 
                Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
                        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
                
            

        
        </script>
    </body>
</html>
