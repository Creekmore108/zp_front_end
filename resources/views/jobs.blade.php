@extends('layouts.app')
@section('content')
@include('partials.header')
<jobs class="lg:relative">
    <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
      <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
          <span class="block text-coffee">Search current openings</span>
          <span class="block text-yellow-800 xl:inline">@ Zeitplans</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
        @Zeitplans we are building a better way to work, fueled by trust, transparency and technology that is a force for positive change in the world.
        </p>
        <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
         
        <div>

          <div class="mt-1 flex rounded shadow-sm">
            <div class="relative flex items-stretch flex-grow rounded focus-within:z-10">
              <input type="text" name="jobs" id="jobs" class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-l-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:placeholder-gray-400" placeholder="Software Developer">
            </div>
            <!-- <button x-data="{}" x-on:click="window.livewire.emitTo('job-search-modal', 'show')" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-coffee focus:border-coffee"> -->
            <button class="jobs relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-yellow-600 focus:border-yellow-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
              <span>Search test</span>
            </button>
          </div>
        </div>

        </div>
      </div>
    </div>
    <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
      <img class="absolute inset-0 w-full h-full object-cover" src="img/JobHunt.jpg" alt="">
    </div>
  </jobs>
  <script>
    document.querySelector(".jobs").addEventListener('click', function(){ 
                Swal.fire({
                    title: 'There are currently no openings',
                    text: 'Check back with us soon, as we are growing',
                    confirmButtonColor: '#D97706',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'},
                            hideClass: {popup: 'animate__animated animate__fadeOutUp'}
                        })
                    })
  </script>
@include('partials.footer')
@endsection