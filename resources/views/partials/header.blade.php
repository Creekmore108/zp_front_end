<div class="fixed w-full z-20 bg-gray-600 rounded-b-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-0 border-gray-100 py-4 md:justify-start md:space-x-10">
      <div class="flex ml-9 justify-start lg:w-0 lg:flex-1">
        <a href="{{ route('home') }}">
          <x-icon.logo class="h-12 w-auto"/> </a> 
          <div class="text-white text-4xl mr-16 ml-3">Zeitplans</div>
      </div>

      <div class="-mr-2 -my-2 md:hidden">
        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/menu -->
          <x-icon.hamburger/>
          <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg> -->
        </button>
      </div>

      <nav class="hidden md:flex space-x-10">
        <a href="/?#features" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Features
        </a>
        <a href="/?#faq" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          FAQ
        </a>
        <a href="/?#pricing" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Pricing
        </a>
        <a href="/?#contact" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Contact
        </a>
      </nav>

      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
          Sign in
        </a>
        
      </div>
      
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
  <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-gray-600 divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <x-icon.logo class="h-10 w-auto "/>
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-600 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <x-icon.x />
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="/?#features" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.clipboard-list/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Features
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.question-mark/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                FAQ
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.currency-dollar/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Pricing
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
              <x-icon.mail/>
              <span class="ml-3 text-gray-300 hover:bg-gray-700 hover:text-yellow-600 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                Contact
              </span>
            </a>

          
          </nav>
        </div>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div>
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 ">
            Login
          </a>
        </div>
      </div>
    </div>
  </div>
</div>