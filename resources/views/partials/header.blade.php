<<<<<<< HEAD
<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-600 rounded-b-lg">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <img class="block lg:hidden h-10 w-auto ml-3" src="{{ asset('img/icons/logo.svg')}}" alt="Workflow">
          <img class="hidden lg:block h-12 w-auto ml-3" src="{{ asset('img/icons/logo.svg')}}" alt="Workflow"><div class="text-white text-4xl mr-16 ml-3">Zeitplans</div>
=======
<nav  class=" border-b border-gray-900 rounded-b-2xl bg-gray-600 fixed inset-x-0 top-0 h-16 z-50">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8 mt-1">
    <div x-data="{ isOpen: false }" class="relative flex items-center justify-between h-16">
      <div class="flex items-center px-2 lg:px-0 ">
        <div class="flex-shrink-0">
          <span class="inline-flex"> 
          <a href="{{ route('home') }}"> <x-icon.logo class="lg:block h-16 w-auto mr-4" /></a>
          <span class="text-white text-5xl mr-16 mt-2">Zeitplans</span></span> 
>>>>>>> parent of e46a9e0... changed out Mobile menu
        </div>
        <div class="hidden lg:block lg:ml-6 mt-0">
          <div class="flex space-x-4 mt-0">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/?#features" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Features</a>
            <a href="/?#faq" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">FAQ</a>
            <a href="/?#pricing" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Pricing</a>
            <a class="one text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Live Demo</a>
            <a href="/?#contact" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">Contact</a>
          </div>
        </div>

          <div class="absolute top-0 right-0 mt-4 mr-2 md:mr-10 sm:mr-16">
              @if (Route::has('login'))
                  <div class="space-x-4 hidden lg:block">
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
                          <a href="{{ route('login') }}" class="font-medium text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:underline transition ease-in-out duration-150">Login</a>

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
            <button type="button" 
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" 
                @click="isOpen = !isOpen"> 
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed.
                      Heroicon name: outline/menu
                      Menu open: "hidden", Menu closed: "block"-->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!--Icon when menu is open.
                    Heroicon name: outline/x
                    Menu open: "block", Menu closed: "hidden"-->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
      </div>

<<<<<<< HEAD
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="navbar sm:hidden" id="mobile-menu" x-data="{ open: false }">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/?#features" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Features</a>
=======
      <div class="relative bg-white">
      <div  x-show="isOpen" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div  class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-yellow-600">
          <div class="pt- pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <img class="w-auto h-10" src="{{ asset('img/icons/logo.svg') }}" alt="Zeitplans">
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
>>>>>>> parent of e46a9e0... changed out Mobile menu

        <div class="mt-auto">
              <nav class="grid grid-cols-1 gap-2">
                <a href="{{ route('home', '#features') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
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

                <a href="{{ route('home', '#faq') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
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

                <a href="{{ route('home', '#pricing') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
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

<<<<<<< HEAD
      <a href="/?#contact" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
    
      @if (Route::has('login'))
        <div class="divide-y divide-yellow-500">  
          @auth
            <div>
              <a
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
              >
                Log out</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </div>
      @else
            <div>
              <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
            </div>
          @endauth
          </div>      
      @endif
    
=======
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

                <a href="{{ route('home', '#contact') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
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
>>>>>>> parent of e46a9e0... changed out Mobile menu
    </div>
    </div>
  </div>
  </div>
</nav>