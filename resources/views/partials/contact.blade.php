<section id="contact" class="mt-3">
    <!-- Contact Section -->
    <div class="relative bg-white py-16">
      <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="{{ asset('img/officeWork.jpg') }}" alt="">
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

            <form action="/contact" method='POST' class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf
              <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <div class="mt-1">
                  <input type="text" name="first_name" id="first_name"  value="{{ old('first_name') }}" placeholder="First name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600  focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('first_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <div class="mt-1">
                  <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Last name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                  <input id="email" name="email" type="email"  value="{{ old('email') }}" autocomplete="email"  placeholder="Email address" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                <div class="mt-1">
                  <input type="text" name="organization" id="organization" value="{{ old('organization') }}" placeholder="Organization name" autocomplete="organization" class="block w-full shadow-sm sm:text-sm  focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                  <span id="phone" class="text-sm text-gray-500">Optional</span>
                </div>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" autocomplete="tel"  value="{{ old('phone') }}" placeholder="Phone number"  class="block w-full shadow-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="comment" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                  <span id="comment" class="text-sm text-gray-500">Max. 500 characters</span>
                </div>
                <div class="mt-1">
                  <textarea id="comment" name="comment"  rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600  border border-gray-300 rounded-md">{{ old('comment') }}</textarea>
                  @error('comment') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              
              <div class="sm:col-span-2">
                <label for="referral" class="block text-sm font-medium text-gray-700">How did you hear about us?</label>
                <div class="mt-1">
                  <input type="text" name="referral" id="referral" value="{{ old('referral') }}" class="shadow-sm focus:ring-yellow-600 focus:border-yellow-600  block w-full sm:text-sm border-gray-300 rounded-md">
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
    </div>
</div>
</section>