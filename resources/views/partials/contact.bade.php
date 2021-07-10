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
            @livewire('contact-form')
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
        <x-button x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">Get Started</x-button>
        <!-- <a href="" x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')" class="inline-flex px-4 py-2 h-11 border text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-coffee to-dark-coffee hover:text-white hover:from-dark-coffee hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">
          Get started
          </a> -->
        </div>
      </div>
    </div>
    <!-- <x-button x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')">Get Started</x-button> -->
</div>