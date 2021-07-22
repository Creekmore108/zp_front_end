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
        <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>


        <!-- Alpine js CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>

    <body class="font-sans antialiased">
        @yield('body')

        @livewireScripts
        
        <script>
                     
    // one is located in header.blade.php menu item "Live Demo" 
document.querySelector(".one").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

    // two and three are in the hero.blade.php buttons
document.querySelector(".two").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

document.querySelector(".three").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

    // four and five are in alternating_features.blade.php
document.querySelector(".four").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

document.querySelector(".five").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

    // six is in pricing.blade.php
document.querySelector(".six").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
    
    // seven is in ctc.blade.php 
document.querySelector(".seven").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

    // eight is in footer.blade.php
document.querySelector(".eight").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})

    // nine is in the header.blade.php mobile menu "live Demo"
document.querySelector(".nine").addEventListener('click', function(){ 
Swal.fire({title: 'We are still in development',text: 'subscribe to our email list to be notified when we are in production',confirmButtonColor: '#D97706',
        showClass: {popup: 'animate__animated animate__fadeInDown'},hideClass: {popup: 'animate__animated animate__fadeOutUp'}})})
                
       


        </script>
    </body>
</html>
