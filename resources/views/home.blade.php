@extends('layouts.app')

@section('content')
 
<div class="py-16">
<nav  class=" border-b border-gray-900 rounded-b-2xl bg-gray-600 fixed inset-x-0 top-0 h-16 z-50">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div x-data="{ isOpen: false }" class="relative flex items-center justify-between h-16">
      <div class="flex items-center px-2 lg:px-0 ">
        <div class="flex-shrink-0">
          <span class="inline-flex"> 
          <a href="http://zp_front_end.test"> <img class=" lg:block h-16 w-auto mr-4" src="http://zp_front_end.test/img/icons/logo.svg" alt="Zeitplans"></a>
          <span class="text-white text-5xl mr-16 mt-3">Zeitplans</span></span> 
        </div>
        <div class="hidden lg:block lg:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="http://zp_front_end.test?#features" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Features</a>
            <a href="http://zp_front_end.test?#faq" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">FAQ</a>
            <a href="http://zp_front_end.test?#pricing" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Pricing</a>
            <a x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')" class="text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Live Demo</a>
            <a href="http://zp_front_end.test?#contact" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Contact</a>
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
                    <!-- Heroicon name: calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path class="bg-yellow-800" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
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
            <main>
                <div class="bg-white">
  <main>
  <!-- Hero section -->
<div class="relative mt-0">
      <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-b from-gray-600"></div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
          <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="img/background.png" alt="">
            <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-yellow-800 mix-blend-multiply opacity-90"></div>
          </div>
          <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
              <span class="block text-white">Take control of your</span>
              <span class="block text-white">Resources</span>
            </h1>
            <p class="font-bold rounded-lg mt-6 max-w-lg mx-auto text-center text-2xl text-white sm:max-w-3xl bg-yellow-800 opacity-80">
            Zeitplans.com was designed and created by artisans who realized the need to manage resources at membership based cooperatives and guilds. We understood the challenges from both the artists stand point as well as the management team trying to keep things running smoothly. Being able to reserve a kiln or spray booth so you have enough inventory for an upcoming show or sale. Management being able to account for the ussage of the resources and receive accurate payment so that they can continue to operate. As we realized number of organizations where still using pen and paper or a spreadsheet located on a drive somewhere. Providing an easy to use system that is available 24/7 from anywhere was seen as a huge benefit.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
              <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
              <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Get Started
</button>
                <!-- <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                  Get started
                </a> -->
                <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Live Demo
</button>
                <!-- <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                  Live demo
                </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <!-- Logo Cloud -->
<div class="bg-white">
      <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">
          Built with industry standard trusted technologies
        </p>
        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-14" src="img/laravel_icon.png" alt="Laravel php framework">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-14" src="img/MySQL_icon.png" alt="MySQL Database">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="img/ubuntu_icon.png" alt="Ubuntu UNIX Server">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
            <img class="h-12" src="img/tailwind_icon.png" alt="Tailwind CSS">
          </div>
          <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
            <img class="h-14" src="img/livewire_icon.png" alt="Livewire">
          </div>
        </div>
      </div>
    </div>
  <!-- Alternating Feature Sections -->
<div class="relative pt-16 pb-32 overflow-hidden">
      <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
      <div class="relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
            <div>
              <div>
                <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-l from-gray-400 to-gray-600">
                  <!-- Heroicon name: outline/inbox -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                  Stay on top of your resources
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                  A simple calendar view to view your resource bookings. Calendar view has muliple view options to view your resources by the Day, Week, Month.
                  All interfaces are mobile ready so your memnbers can access and reserve resources from anywhere at anytime of day.
                </p>
                <div class="mt-6">
                <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Get Started
</button>
                  <!-- <a href="#" class="inline-flex px-4 py-2 text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Get started
                  </a> -->
                </div>
              </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-6">
              <!-- <blockquote>
                <div>
                  <p class="text-base text-gray-500">
                    &ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;
                  </p>
                </div>
                <footer class="mt-3">
                  <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                      <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                    </div>
                    <div class="text-base font-medium text-gray-700">
                      Marcia Hill, Digital Marketing Manager
                    </div>
                  </div>
                </footer>
              </blockquote> -->
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0">
            <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="img/calendar_resources.png" alt="resources screenshot">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
            <div>
              <div>
                <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-gray-400 to-gray-600">
                  <!-- Heroicon name: outline/sparkles -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                  View all your schedules items on page
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                  In the dashboard view you are able to view all your resources, schedules classes and meetings all in one calendar.
                </p>
                <div class="mt-6">
                <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Get Started
</button>
                  <!-- <a href="#" class="inline-flex px-4 py-2 text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                    Get started
                  </a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="img/calendar_all.png" alt="all resources screen shot">
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Gradient Feature Section -->

<section id="features" class="mt-3">
    <div class="bg-gradient-to-r from-yellow-600 to-yellow-800 rounded-2xl" >
      <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
        <h2 class="font-extrabold text-4xl text-gray-600 tracking-tight">
          Application Features
        </h2>
        <p class="mt-4 max-w-3xl text-lg text-white">
          These are the present standard application features. We are continually developing new functionality in which you will be notified when it is ready to use.
        </p>
        <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/calendar -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" />
                  </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Resource Scheduling</h3>
              <p class="mt-2 text-base text-white">
              The ability to add, delete and update resources that you have available for your memebers to schedule. The calendar has many views (Monthly, Weekly, Daily and as a list) so you can expand or narrow your search as desired. You can upload images of your resources as well as change the status in case one is down for maintenance. The ability to change the color associated with each resource makes it easier to organize and view in the calendar.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/users -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Manage Team Member Accounts</h3>
              <p class="mt-2 text-base text-white">
              You have full administrator privilages to add, edit and delete your users as needed. Members have the ability to manage their profiles giving details about themselves and uploading an avatar or a portrait of themselves. 
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                 <!-- Heroicon name: outline/clipboard list -->
                 <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="dark-yellow-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Scheduling Waitlists</h3>
              <p class="mt-2 text-base text-white">
              Wait lists allow users to signup and be notified in the instance a resource that had already been scheduled by another user becomes availble during the time the wanted to used it. This increases the utilization of your resources during times of high demand and keeps your memebers happy.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/at symbol -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16C14.2091 16 16 14.2091 16 12ZM16 12V13.5C16 14.8807 17.1193 16 18.5 16C19.8807 16 21 14.8807 21 13.5V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21M16.5 19.7942C15.0801 20.614 13.5296 21.0029 12 21.0015" stroke="dark-yellow-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Custom Sub-domain</h3>
              <p class="mt-2 text-base text-white">
              When you sign-up with Zeitplans you will be asked to choose a sub-domain name (BPG.Zeitplans.com), where the BPG could represent the initials of your orgainzation or a name. This ensures your users they are on your site and your data is separate from other customers using Zeitplans.com.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/collection -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="dark-yellow-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Logs</h3>
              <p class="mt-2 text-base text-white">
              Having the ability to add logs to each resource is available for ussage and maintance. The ussage logs are helpful for say a kiln firing that requires a number of steps of time to have a succesful firing. The maintenance logs are used to record, just as the name says maintenance of each resource.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
              <!-- Heroicon name: outline/collection -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M11 3.05493C6.50005 3.55238 3 7.36745 3 12C3 16.9706 7.02944 21 12 21C16.6326 21 20.4476 17.5 20.9451 13H11V3.05493Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.4878 9H15V3.5123C17.5572 4.41613 19.5839 6.44285 20.4878 9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Reports</h3>
              <p class="mt-2 text-base text-white">
              Basic reports on resource scheduling and member ussage are availble with more detailed reports being developed every week.
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/chat -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M8 12H8.01M12 12H12.01M16 12H16.01M21 12C21 16.4183 16.9706 20 12 20C10.4607 20 9.01172 19.6565 7.74467 19.0511L3 20L4.39499 16.28C3.51156 15.0423 3 13.5743 3 12C3 7.58172 7.02944 4 12 4C16.9706 4 21 7.58172 21 12Z" stroke="dark-yellow-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">Internal Chat</h3>
              <p class="mt-2 text-base text-white">
              We understand there are many channels to communicate in this day and age but we added an internal chat system so if you are online looking to schedule a resource and you see another member who is online as well you can connect straight away.
             
              </p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">
                <!-- Heroicon name: outline/user-group -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="dark-yellow-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-extrabold text-white">System Administration</h3>
              <p class="mt-2 text-base text-white">
              <ul class="list-disc list-inside text-white">
                  <li>Add, update and delete resources</li> 
                  <li>Manage member accounts</li>
                  <li>Manage the Class Postings</li>
                  <li>Access reports and logs</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- FAQ section -->
 <section id="faq" class="mt-3">
    <div class="relative bg-gray-600 rounded-2xl">
    <div class="h-60 absolute bottom-0 xl:inset-0 xl:h-full xl:w-full">
    <div class="h-full w-full xl:grid xl:grid-cols-2">
      <div class="h-full xl:relative xl:col-start-2">
        <img class="h-full w-full object-cover opacity-40 xl:absolute xl:inset-0" src="http://zeitplans_frontend.test/img/workspace.jpg">
          <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-600 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
      </div>
    </div>
  </div>
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8 ">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
          <p class="mt-5 text-4xl font-extrabold text-white">Frequently Asked Questions</p>
          <p class="text-lg mt-7 text-gray-300">If you do not find the answers to your questions listed below please feel free to contact us.</p>
          <div class="mt-10 flex-col mb-10" >
    
            <div class="col-span-full my-10" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                  Which plan is right for my organization?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                    Can I access Zeitplans on my smartphone?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                    What if I change my mind?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    We understand that each organization is unique, requiring specific features to support its members and reporting needs. Above you can see the features included in the different plans to support your needs.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                  What will the URL to my account look like?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                  You will be able to choose a subdomain name ( OrgName.Zeitplans.com ) when you signup.
                  </div>
                </div>
            </div> 


            <div class="col-span-full my-6" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                    How secure is Zeitplans.com?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                    The security of our customer’s data is our top priority. Zeitplans.com is built with strict security requirements and protocols to secure your data, such as ISO/IEC 27001 and ISO/IEC 27018, and is undergoing annual security audits and assessments. We use high physical, procedural, and technical security measures to preserve the integrity and security of your data, as well as adhering to the strictest data protection laws.
                  </div>
                </div>
            </div> 

            <div class="col-span-full my-6 mb-20" x-data="{ open: false }">
                <div>
                  <div class="text-white font-bold cursor-pointer inline-flex" @mouseover="open = true" @mouseleave="open = false" >
                    <div x-data="{ open: true }" class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                      </svg>
                    </div>
                    What payment types do you accept?
                  </div>
                  <div  x-show="open"  class="col-span-full text-gray-100 font-normal transition ease-in-out duration-1000 pl-7">
                  We accept the following payment methods: All the major credit cards (excluding debit cards) - Visa, Master Card, American Express, Discover. You can also purchase your Zeitplans.com subscription with PayPal.
                  </div>
                </div>
            </div> 
            
          </div>
          </div>
        </div>
      </div>
    </div> 

  <!-- Pricing Section -->

<section id="pricing" class="mt-3">  
<div class="bg-gray-100 rounded-2xl">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:flex-col sm:align-center">
      <h1 class="text-5xl font-extrabold text-gray-900 sm:text-center">Pricing Plans</h1>
      <p class="mt-5 text-xl text-gray-500 sm:text-center">Signup now and get your orginazation on track and manage all your resources in one place.</p>
    </div>
    <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
    <!-- Start of Bronze Pricing Plan box -->
      <div class="border bg-gradient-to-t from-yellow-600 to-white border-gray-300 rounded-lg shadow-sm divide-y divide-gray-200">
      
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Bronze</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(1-20 users @ .95&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-600">$10</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <button class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600"
          x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
          Get Started
          </button>
          <!-- <a href="#" class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-coffee">
                    Get started
          </a> -->
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="pt-6 pb-8 px-6 bg-yellow-600 rounded-b-lg">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
    <!-- End of Bronze Pricing Plan box -->
    <!-- Start of Silver Pricing Plan Box -->
    <div class="border bg-gradient-to-t from-yellow-600 to-white  border-gray-300 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Silver</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(21-40 users @ .85&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-600">$15</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <button class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600"
          x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
          Get Started
          </button>
          <!-- <a href="#" class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-coffee">
                    Get started
          </a> -->
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-yellow-600 pt-6 pb-8 px-6 rounded-b-lg">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- End of Silver Pricing box -->
      <!-- Start of Gold Pricing Plan Box -->
    <div class="border bg-gradient-to-t from-yellow-600 to-white  border-gray-300 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Gold</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(41-60 users @ .80&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-600">$20</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <button class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600"
          x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
          Get Started
          </button>
          <!-- <a href="" class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-coffee">
                    Get started
          </a> -->
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-yellow-600 pt-6 pb-8 px-6 rounded-b-lg">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- end of Gold pricing box -->
       <!-- Start of Platinum Pricing Plan Box -->

    <div class="border bg-gradient-to-t from-yellow-600 to-white  border-gray-300 rounded-lg shadow-sm divide-y divide-gray-200">
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">Platinum</h2>
          <p class="mt-4 text-sm text-gray-800">Full functioning environment<br>(61-80 users @ .75&cent; each)</p>
          <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-600">$25</span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>
          <button class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600"
          x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
          Get Started
          </button>
          <!-- <a href="#" class="inline-flex mt-8 w-full px-4 py-2  font-extrabold rounded-md text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-coffee">
                    Get started
          </a> -->
          <!-- <a href="#" class="mt-8 block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Hobby</a> -->
        </div>
        <div class="bg-yellow-600 pt-6 pb-8 px-6 rounded-b-lg">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- end of Platinum pricing box -->
  </div>
</div>
</div> 

  <section id="contact" class="mt-3">
    <!-- Contact Section -->
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
            <form wire:id="w5LKD4absCQ9cd0m3CRJ" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;w5LKD4absCQ9cd0m3CRJ&quot;,&quot;name&quot;:&quot;contact-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;153f6110&quot;,&quot;data&quot;:{&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;organization&quot;:null,&quot;phone&quot;:null,&quot;content&quot;:null,&quot;reference&quot;:null,&quot;email&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;a8a59b43949cef78ade5a50663de4471150cb42bf54c213a24615e8e5fdd6710&quot;}}" wire:submit.prevent="submit" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
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
    <div class="bg-white">
      <div class=" max-w-4xl xs:pl-5 sm:ml-12 mx-auto py-16 px-20 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-center ">
        <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-4xl mr-28">
          <span class="block">Ready to get started?</span>
          <span class="block text-yellow-800 md:text-5xl drop-shadow ">Create an account today.</span>
        </h2>
        <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
        <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Get Started
</button>
        <!-- <a href="" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')" class="inline-flex px-4 py-2 h-11 border text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-coffee to-dark-coffee hover:text-white hover:from-dark-coffee hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">
          Get started
          </a> -->
        </div>
      </div>
    </div>
    <!-- <button type="submit" class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">
    Get Started
</button>
 -->
</div>  </main>
</div>
            </main>
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