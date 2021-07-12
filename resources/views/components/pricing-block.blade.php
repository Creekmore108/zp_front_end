{{-- pricing block for each pricing plan --}}
@props([
    'title',
    'description',
    'num',
    'per',
    'base',
    'period',
   
])

<div class="border bg-gradient-to-t from-yellow-600 to-white border-gray-300 rounded-lg shadow-sm divide-y divide-gray-200">
    
        <div class="p-6">
          <h2 class="text-lg leading-6 font-bold text-gray-900">{{ $title }}</h2>
            <p class="mt-4 text-sm text-gray-800">{{ $description }}<br>({{ $num }} users @ {{ $per }}&cent; each)</p>
            <p class="mt-8">
            <span class="text-4xl font-extrabold text-gray-600">{{ $base }}</span>
            <span class="text-base font-medium text-gray-500">{{ $period }}</span>
            </p>
          
            <!-- <button 
            class="inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600"
            x-data="{}" 
            x-on:click="window.livewire.emitTo('contact-modal', 'show')">
            Get Started 
            </button> -->
            <x-button class="six inline-flex mt-8 w-full px-4 py-2 font-extrabold rounded-md shadow-sm text-white text-center bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-600 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
            Get Started 
            </x-button>
            
        </div>
        <div class="pt-6 pb-8 px-6 bg-yellow-600 rounded-b-lg">
          <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
          <ul class="mt-6 space-y-4">

            <li class="flex space-x-3">
              
              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Resource Scheduling</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Wait Lists</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Member Accounts</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Class Posting</span>
            </li>
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Reporting</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Custom Sub-domain</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Logs</span>
            </li>
            <li class="flex space-x-3">

              <!-- Heroicon name: solid/check -->
              <x-icon.check class="text-gray-600"/>

              <span class="text-sm text-gray-800">Internal Chat</span>
            </li>
          </ul>
        </div>
</div>