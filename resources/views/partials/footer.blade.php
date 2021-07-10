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
      
            <div class="mt-5 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-6">
                <div class="flex space-x-6 md:order-2 ">
                    <a href="https://www.facebook.com/Zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6 " fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/zeitplans/" target="top" class="text-gray-100 hover:text-gray-500 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
            
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; 2021 Zeitplans.com, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</section>