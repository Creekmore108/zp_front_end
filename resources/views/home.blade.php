@extends('layouts.app')

@section('content')
 
<div class="py-16">
<nav  class=" border-b border-gray-900 rounded-b-2xl bg-gray-600 fixed inset-x-0 top-0 h-16 z-50">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div x-data="{ isOpen: false }" class="relative flex items-center justify-between h-16">
      <div class="flex items-center px-2 lg:px-0 ">
        <div class="flex-shrink-0">
          <span class="inline-flex"> 
          <a href="{{ route('home') }}"> <x-icon.logo class="lg:block h-16 w-auto mr-4" /></a>
          <span class="text-white text-5xl mr-16 mt-3">Zeitplans</span></span> 
        </div>
        <div class="hidden lg:block lg:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/?#features" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Features</a>
            <a href="/?#faq" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">FAQ</a>
            <a href="/?#pricing" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Pricing</a>
            <a x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')" class="text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Live Demo</a>
            <a href="/?#contact" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Contact</a>
          </div>
        </div>
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-medium text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 transition ease-in-out duration-150"
                        >
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-medium text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:underline transition ease-in-out duration-150">Log in</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-gray-300 hover:text-yellow-600 px-3 py-2 rounded-md text-lg focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:underline transition ease-in-out duration-150">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
        </div>
      </div>
    
      <div class="flex lg:hidden">
        <!-- Mobile menu button -->
        <button 
            type="button" 
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" 
            @click="isOpen = !isOpen"
            > 
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="relative bg-white">
      <div  x-show="isOpen" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div  class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-yellow-600">
          <div class="pt- pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <!-- <img class="w-auto h-10" src="http://zeitplans_frontend.test/img/icons/logo.svg" alt="Zeitplans"> -->
              </div>
              <div>
                <button 
                    type="button" 
                    class="bg-yellow-800 rounded-md mt-4 mr-3  inline-flex text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-800"
                    @click="isOpen = !isOpen">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="http://zeitplans_frontend.test?#features" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gray-600 text-white">
                    <x-icon.calendar/>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Features
                  </div>
                </a>

                <a href="http://zeitplans_frontend.test?#faq" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gray-600 text-white">
                    <!-- Heroicon name: Question mark -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    FAQ
                  </div>
                </a>

                <a href="http://zeitplans_frontend.test?#pricing" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gray-600 text-white">
                    <!-- Heroicon name: currency-dollar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Pricing
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gray-600 text-white">
                    <!-- Heroicon play -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Demo
                  </div>
                </a>

                <a href="http://zeitplans_frontend.test?#contact" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gray-600 text-white">
                    <!-- Heroicon at symbol -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Contact
                  </div>
                </a>
                
              </nav>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>


    </div>
  </div>
</nav>
            
  <!-- Hero section -->
    @include('partials.hero')
  
  <!-- Logo Cloud -->
    @include('partials.logocloud')

  <!-- Alternating Feature Sections -->
    @include('partials.altfeatures')

  <!-- Gradient Feature Section -->
    @include('partials.features')

  <!-- FAQ section -->
    @include('partials.faq')

  <!-- Pricing Section -->
    @include('partials.pricing')

    <!-- Contact Section -->
  <section id="contact" class="mt-3">
    <div class="relative bg-white py-16">
      <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="img/officeWork.jpg" alt="">
        </div>
      </div>
        <div class="relative py-5 px-4 sm:py-24 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:py-14 lg:grid lg:grid-cols-2">
        <div class="lg:pr-8">
          <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
              Let's work together
            </h2>
            <p class="mt-4 text-lg text-gray-700 sm:mt-3">
              We’d love to hear from you! <br>Send us a message using this form, or email us.
              <p class="text-yellow-800 text-lg">Admin@Zeitplans.com</p>
            </p>
            <form wire:id="" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;w5LKD4absCQ9cd0m3CRJ&quot;,&quot;name&quot;:&quot;contact-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;153f6110&quot;,&quot;data&quot;:{&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;organization&quot;:null,&quot;phone&quot;:null,&quot;content&quot;:null,&quot;reference&quot;:null,&quot;email&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;a8a59b43949cef78ade5a50663de4471150cb42bf54c213a24615e8e5fdd6710&quot;}}" wire:submit.prevent="submit" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <div class="mt-1">
                  <input type="text" name="first_name" id="first_name" wire:model="first_name"  placeholder="First name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                                  </div>
              </div>
              <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <div class="mt-1">
                  <input type="text" name="last_name" id="last_name" wire:model="last_name" placeholder="Last name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                  <input id="email" name="email" type="email" wire:model="email" autocomplete="email"  placeholder="Email address" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                                  </div>
              </div>
              <div class="sm:col-span-2">
                <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                <div class="mt-1">
                  <input type="text" name="organization" id="organization" wire:model="organization"  placeholder="Organization name" autocomplete="organization" class="block w-full shadow-sm sm:text-sm  focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                  <span id="phone_description" class="text-sm text-gray-500">Optional</span>
                </div>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" wire:model="phone" autocomplete="tel" placeholder="Phone number" aria-describedby="phone_description" class="block w-full shadow-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="content" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                  <span id="content_description" class="text-sm text-gray-500">Max. 500 characters</span>
                </div>
                <div class="mt-1">
                  <textarea id="content" name="content" wire:model="content" aria-describedby="content_description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600  border border-gray-300 rounded-md"></textarea>
                                  </div>
              </div>
              
              <div class="sm:col-span-2">
                <label for="reference" class="block text-sm font-medium text-gray-700">How did you hear about us?</label>
                <div class="mt-1">
                  <input type="text" name="reference" wire:model="reference" id="reference" class="shadow-sm focus:ring-yellow-600 focus:border-yellow-600  block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="text-center sm:col-span-2">
                <button  class="inline-flex justify-center py-4 px-6  shadow-sm text-sm font-medium rounded-md text-gray-900 bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 ">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- CTA Section -->
    @include('partials.cta')

</div>
           
<section id="footer">
<footer class="bg-gray-600 md:rounded-t-2xl rounded-t-2xl" aria-labelledby="footerHeading">

    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-7xl bg-gray-600 rounded-t-2xl mx-auto pt-7 pb-5 px-4 sm:px-6 lg:pt-10 lg:px-8">
        <div class="flex  flex-wrap justify-between">
          
          
            <div class="bg-gray-600">
              <div>
              <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
                Company
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="/about" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    About
                  </a>
                </li>

                <li>
                  <a href="/jobs" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Jobs
                  </a>
                </li>
                <li>
                  <a href="/press" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Press
                  </a>
                </li>
                
              
                <li>
                  <img src="http://zeitplans_frontend.test/img/icons/logo.svg" class="h-16" alt="">
                </li>
              </ul>
              </div>
            </div>
          

          <div class="bg-gray-600">
            <div>
              <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
               Legal
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="/privacy" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Privacy
                  </a>
                </li>

                <li>
                  <a href="/terms" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Terms
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="bg-gray-600">
            <div>
              <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
                Links
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="http://zeitplans_frontend.test?#features" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Features
                  </a>
                </li>

                <li>
                  <a href="http://zeitplans_frontend.test?#faq" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Fequently Asked Questions
                  </a>
                </li>

                <li>
                  <a href="http://zeitplans_frontend.test?#" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Live Demo
                  </a>
                </li>

                <li>
                  <a href="http://zeitplans_frontend.test?#pricing" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Pricing
                  </a>
                </li>
                <li>
                  <a href="http://zeitplans_frontend.test?#contact" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
          
          </div>

          <div class=" bg-gray-600">
            <div class="mt-12 xl:mt-0">
              <h3 class=" text-gray-100 text-3xl font-bold tracking-wider uppercase">
                Subscribe to our email list
              </h3>
              <p class="mt-4 text-2xl text-gray-200">
                The latest news and resources, sent to your inbox.
              </p>
<form  action="#" class="mt-4 sm:flex sm:max-w-md">


    <label for="email" class="sr-only">Email address</label>
    <div>
    <input type="email" name="email" id="email"  wire:model="email" autocomplete="email" placeholder="Email address" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:placeholder-gray-400" placeholder="Enter your email">
        </div>
    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
        <button type="submit" class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
            Subscribe
        </button>
    </div>
    
</form>
             
            </div>
          </div>
        </div>
      
      
    
      
          <div class="mt-5 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-6">
            <div class="flex space-x-6 md:order-2">
              <a href="https://www.facebook.com/Zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6 " fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
              </a>

              <a href="https://www.instagram.com/zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
              </a>
          
            </div>
              <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                &copy; 2021 Zeitplans.com, Inc. All rights reserved.
              </p>
          </div>
      </div>
  </footer>




@endsection