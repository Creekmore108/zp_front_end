<section id="footer">
    <footer class="bg-gray-600 md:rounded-t-2xl rounded-t-2xl" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl bg-gray-600 rounded-t-2xl mx-auto pt-7 pb-5 px-4 sm:px-6 lg:pt-10 lg:px-8">
            <div class="flex  flex-wrap justify-between">
            
                <div class="bg-gray-600">
                    <div>
                        <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
                            Company
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                            <a href="/about" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                                About</a>
                            </li>

                            <li>
                            <a href="/jobs" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                                Jobs</a>
                            </li>
                            <li>
                            <a href="/press" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                                Press</a>
                            </li>
                            
                            <li>
                            <x-icon.logo class="h-16 w-auto" />
                            </li>
                        </ul>
                </div>
            </div>
        
            <div class="bg-gray-600">
                <div>
                    <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
                    Legal
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                        <a href="/privacy" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Privacy</a>
                        </li>

                        <li>
                        <a href="/terms" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Terms</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-gray-600">
                <div>
                    <h3 class="text-base font-semibold text-gray-100 tracking-wider uppercase">
                        Links
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                        <a href="/?#features" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Features</a>
                        </li>

                        <li>
                        <a href="/?#faq" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Fequently Asked Questions</a>
                        </li>

                        <li>
                        <a href="/?#" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Live Demo</a>
                        </li>

                        <li>
                        <a href="/?#pricing" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Pricing</a>
                        </li>
                        <li>
                        <a href="/?#contact" class="text-base text-gray-200 hover:text-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

                <div class=" bg-gray-600">
                    <div class="mt-12 xl:mt-0">
                        <h3 class=" text-gray-100 text-3xl font-bold tracking-wider uppercase">
                            Subscribe to our email list
                        </h3>
                        <p class="mt-4 text-2xl text-gray-200">
                            The latest news and resources, sent to your inbox.
                        </p>
                        <form  action="#" class="mt-4 sm:flex sm:max-w-md">
                            <label for="email" class="sr-only">Email address</label>
                            <div>
                                <input type="email" name="email" id="email"  wire:model="email" autocomplete="email" placeholder="Email address" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:placeholder-gray-400" placeholder="Enter your email">
                            </div>
                            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <x-button class="inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150" >Subscribe</x-button>
                            </div>
                        </form>
                
                    </div>
                </div>
            </div>
                
                <div class="mt-5 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-6">
                    <div class="flex space-x-6 md:order-2 ">
                        <a href="https://www.facebook.com/Zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            <span class="sr-only">Facebook</span>
                            <x-icon.facebook/>
                        </a>

                        <a href="https://www.instagram.com/zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            <span class="sr-only">Instagram</span>
                            <x-icon.instagram/>
                        </a>
                
                    </div>
                    <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                        &copy; 2021 Zeitplans.com, Inc. All rights reserved.
                    </p>
                </div>
        </div>
    </footer>
</section>