<div x-data="{ open: false }" class="fixed w-full z-20 bg-gray-600 rounded-b-lg">
  <div  class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-0 border-gray-100 py-4 md:justify-start md:space-x-10">
      <div class="flex ml-9 justify-start lg:w-0 lg:flex-1 items-center">
        <a href="{{ route('home') }}">
          <x-icon.logo class="h-12 w-auto"/> </a> 
          <div class="text-white text-4xl mr-16 ml-3">Zeitplans</div>
      </div>

      <div class="-mr-2 -my-2 md:hidden">
        <button @click="open = !open "
                id="burger" 
                type="button" 
                class="bg-white rounded-md p-2 inline-flex items-center justify-center hover:bg-gray-700 hover:text-yellow-600 text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/menu -->
          <x-icon.hamburger/>
          <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg> -->
        </button>
      </div>

      <nav class="hidden md:flex space-x-7">
        <a href="{{ route('home') }}/?#features" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Features
        </a>
        <a href="{{ route('home') }}/?#faq"  class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          FAQ
        </a>
        <a href="{{ route('home') }}/?#pricing" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Pricing
        </a>
        <a href="{{ route('home') }}/demo"  class=" text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Live Demo
        </a>
        <a href="{{ route('home') }}/?#contact"  class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Contact
        </a>
      </nav>

      <!-- @if (Route::has('login')) -->
      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        @auth
          <a href="{{ route('contacts') }}"  class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Contacts
          </a>
          <a href="{{ route('emails') }}"  class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Emails
          </a>
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 transition ease-in-out duration-150">
              Log out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @endauth
        @guest
          <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 transition ease-in-out duration-150">
            Login
          </a>
        @endguest
      </div>
      <!-- @endif -->
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div x-show="open" id="mobileMenu" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-gray-600 divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <x-icon.logo class="h-10 w-auto "/>
          </div>
          <div class="-mr-2">
            <button @click="open = !open " id="closeBtn" type="button" class="bg-white p-2 inline-flex items-center justify-center text-gray-600 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <x-icon.x />
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="{{ route('home') }}/?#features" x-on:click="open = ! open"  class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.clipboard-list/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Features
              </span>
            </a>

            <a href="{{ route('home') }}/?#faq" x-on:click="open = ! open" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.question-mark/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                FAQ
              </span>
            </a>

            <a href="/?#pricing"  x-on:click="open = ! open" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.currency-dollar/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Pricing
              </span>
            </a>

            <a href="/demo"  x-on:click="open = ! open" class="ten -m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.sparkles/>
              <span class="nine ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Live Demo
              </span>
            </a>

            <a href="/?#contact"  x-on:click="open = ! open" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600" >
              <x-icon.mail/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Contact
              </span>
            </a>

          
          </nav>
        </div>
      </div>
      <!-- @if (Route::has('login')) -->
      <div class="py-6 px-5 space-y-6">
        <div>
        @auth
          <a href="{{ route('contacts') }}"  class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Contacts
          </a>
          <a href="{{ route('emails') }}"  class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Emails
          </a>
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @endauth
        @guest
          <a href="{{ route('login') }}"  class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Login
          </a>
        @endguest
        </div>
      <!-- @endif -->
      </div>
    </div>
  </div>
</div>