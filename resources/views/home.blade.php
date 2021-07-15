@extends('layouts.app')

@section('content')
 
<!-- <div class="py-16"> -->
  <!--  header -->

  @include('partials.header')
            
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
    @include('partials.contact')

  <!-- <section id="contact" class="mt-3">
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
    </div> -->
    
    <!-- CTA Section -->
    @include('partials.cta')
<!-- </div> -->
    <!-- footer -->
    @include('partials.footer') 
    @include('sweetalert::alert') 
    
@endsection