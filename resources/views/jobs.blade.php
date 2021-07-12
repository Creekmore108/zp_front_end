@extends('layouts.app')
@section('content')
@include('partials.header')
<jobs class="lg:relative">
    <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
      <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
          <span class="block ">Search current openings</span>
          <span class="block text-yellow-800 xl:inline">@ Zeitplans</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
        @Zeitplans we are building a better way to work, fueled by trust, transparentcy and technology that is a force for positive change in the world.
        </p>
        <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
         
        <div>

          <div class="mt-1 flex rounded shadow-sm">
            <div class="relative flex items-stretch flex-grow rounded focus-within:z-10">
              <input type="text" name="jobs" id="jobs" class="focus:ring-gray-600 focus:border-gray-600 block w-full rounded rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="Software Developer">
            </div>
            <!-- <button x-data="{}" x-on:click="window.livewire.emitTo('job-search-modal', 'show')" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-coffee focus:border-coffee"> -->
            <button id="jobs" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-yellow-600 focus:border-yellow-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
              <span>Search</span>
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
    
@include('partials.footer')
@endsection