@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="relative bg-white py-16 sm:py-24">
  <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
    <div class="relative sm:py-16 lg:py-0">
      
        <form action="/new_event" method='POST' class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf
              <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <div class="mt-1">
                  <input type="text" name="title" id="title"  value="{{ old('title') }}" placeholder="Title" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="resource_title" class="block text-sm font-medium text-gray-700">Resource</label>
                <div class="mt-1">
                  <input type="text" name="resource_title" id="resource_title" value="{{ old('resurce_title') }}" placeholder="Resource" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('resource_title') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="user_name" class="block text-sm font-medium text-gray-700">User</label>
                <div class="mt-1">
                  <input type="text" name="user_name" id="user_name"  value="{{ old('user_name') }}" placeholder="User Name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('user_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="mt-1">
                  <input type="text" name="location" id="location" value="{{ old('location') }}" placeholder="Location" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('location') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="start" class="block text-sm font-medium text-gray-700">Start</label>
                <div class="mt-1">
                  <input type="date" name="start_date" id="start_date"  value="{{ old('start_date') }}" placeholder="Start Date" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('start_date') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="end" class="block text-sm font-medium text-gray-700">End</label>
                <div class="mt-1">
                  <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" placeholder="End Date" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('end_date') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="background_color" class="block text-sm font-medium text-gray-700">Background Color</label>
                <div class="mt-1">
                  <input type="text" name="background_color" id="background_color"  value="{{ old('background_color') }}" placeholder="Background Color" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('background_color') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="text_color" class="block text-sm font-medium text-gray-700">Text Color</label>
                <div class="mt-1">
                  <input type="text" name="text_color" id="text_color" value="{{ old('text_color') }}" placeholder="Text Color" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('text_color') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              
             
              <div class="text-center sm:col-span-2">
                <button  type="submit" class="inline-flex justify-center py-4 px-6  shadow-sm text-sm font-medium rounded-md text-gray-900 bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 ">
                  Submit
                </button>
              </div>
            </form>
      
      
      
      
    </div>
  </div>
</div>
@include('partials.footer')
@endsection
