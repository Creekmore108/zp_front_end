@extends('layouts.app')
<div class="h-screen flex overflow-hidden bg-cool-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">

        <!-- Off-canvas menu for mobile -->
        <div x-show="sidebarOpen" class="md:hidden" style="display: none;">
            <div class="fixed inset-0 flex z-40">
                <div @click="sidebarOpen = false" x-show="sidebarOpen" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" style="display: none;">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state." x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-600" style="display: none;">
                    <div class="flex items-center justify-between">
                        <button @click="sidebarOpen = !sidebarOpen" id="closeBtn" type="button" class="bg-white p-2 inline-flex items-center justify-center text-gray-600 hover:bg-gray-300 hover:text-yellow-600 mt-4 ml-3 px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <x-icon.x />
                        </button>
                        <div>
                            <x-icon.logo class="h-10 w-auto mt-5 mr-5"/>
                        </div>
                    </div>
                <div class="mt-3">
                    <nav class="mt-3 space-y-1 flex-1 px-2  bg-gray-600">
                        <a href="#" class="one hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.home class="mr-3 h-6 w-6 text-white"></x-icon.home>
                            Dashboard
                        </a>
                        <a  class="two hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.calendar class="mr-3 h-6 w-6 text-white"></x-icon.calendar>
                            Resources
                        </a>
                        <a  class="three hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.classes class="mr-3 h-6 w-6 text-white"></x-icon.classes>     
                            Classes
                        </a>
                        <a  class="four hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.meetings class="mr-3 h-6 w-6 text-white"></x-icon.meetings>
                            Meetings
                        </a>
                        <a class="five hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.chat class="mr-3 h-6 w-6 text-white"></x-icon.chat>
                            Chat
                        </a>
                    </nav>
                </div>
                <div class="mt-10">
                    <nav class="mt-3 space-y-1 flex-1 px-2 bg-gray-600">
                        <p  class="hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800    ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.gear class="mr-3 h-6 w-6 text-white"></x-icon.gear>
                            Admin
                        </p>
                        <a  href="#" class="six hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.folder class="mr-3 h-6 w-6 text-white"></x-icon.folder>
                            Resource Admin
                        </a>
                        <a  class="seven hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.users class="mr-3 h-6 w-6 text-white"></x-icon.users>
                            User Admin
                        </a>
                        <a  class="eight hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.chart-pie class="mr-3 h-6 w-6 text-white"></x-icon.chart-pie>
                            Reports
                        </a>
                    </nav>
                </div>
            
                <div class="py-6 px-5 border-t space-y-6 mt-40">
                    <div>
                    <a href="#" class="nine flex-shrink-0 group block focus:outline-none">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-base leading-6 font-medium text-white">
                                @auth
                                {{ Auth::user()->username }} 
                                @endauth
                                </p>
                                <p class="text-sm leading-5 font-medium text-yellow-600 group-hover:text-yellow-800 group-focus:underline transition ease-in-out duration-150">
                                    View profile
                                </p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end of mobile menu -->

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 border-r border-gray-200 bg-gray-600" >
                <div class="flex-1  flex flex-col pt-3 overflow-y-auto bg-gray-600">
                    <a href="{{ route('home') }}">
                        <div class="flex content-center place-content-center">
                            <x-icon.logo class="h-20 w-auto"></x-icon.logo>
                        </div>
                    </a>
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <nav class="mt-3 space-y-1 flex-1 px-2  bg-gray-600">
                        <a href="#" class="one hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.home class="mr-3 h-6 w-6 text-white"></x-icon.home>
                            Dashboard
                        </a>
                        <a  class="two hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.calendar class="mr-3 h-6 w-6 text-white"></x-icon.calendar>
                            Resources
                        </a>
                        <a  class="three hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.classes class="mr-3 h-6 w-6 text-white"></x-icon.classes>     
                            Classes
                        </a>
                        <a  class="four hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.meetings class="mr-3 h-6 w-6 text-white"></x-icon.meetings>
                            Meetings
                        </a>
                        <a class="five hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.chat class="mr-3 h-6 w-6 text-white"></x-icon.chat>
                            Chat
                        </a>
                    </nav>
               
                    <nav class="mt-3 space-y-1 flex-1 px-2 bg-gray-600">
                            <p  class="hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800    ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                                <x-icon.gear class="mr-3 h-6 w-6 text-white"></x-icon.gear>
                                Admin
                            </p>
                            <a  href="#" class="six hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                                <x-icon.folder class="mr-3 h-6 w-6 text-white"></x-icon.folder>
                                Resource Admin
                            </a>
                            <a  class="seven hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                                <x-icon.users class="mr-3 h-6 w-6 text-white"></x-icon.users>
                                User Admin
                            </a>
                            <a  class="eight hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                                <x-icon.chart-pie class="mr-3 h-6 w-6 text-white"></x-icon.chart-pie>
                                Reports
                            </a>
                    
                    </nav>
                </div>
                
                @if((Auth::user()))
                <div class="flex-shrink-0 flex border-t border-yellow-600 p-4">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full" src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
                            </div>

                            <div class="ml-3">
                                <a href="/profile" class="flex-shrink-0 w-full group block">
                                    <p class="text-sm leading-5 font-medium text-white">
                                    @auth
                                        {{ Auth::user()->username }} 
                                    @endauth
                                    </p>
                                    <p class="text-xs leading-4 font-medium group-hover:text-indigo-100 transition ease-in-out duration-150">
                                        View profile
                                    </p>
                                </a>
                                <a href="/logout" class="group cursor-pointer flex items-center px-2 py-2 text-sm leading-5 font-medium text-white rounded-md bg-indigo-900 focus:outline-none focus:bg-indigo-700 transition ease-in-out duration-150">
                                    <x-icon.logout></x-icon.logout>
                                    Logout
                                </a>
                            </div>
                        </div>
                </div>
                @else
                <div class="flex-shrink-0 flex border-t p-4">
                    <nav class="mb-2 space-y-1 flex-1 px-2">
                        <a href="/login" class="hover:no-underline group flex items-center px-2 py-2 text-sm leading-5 font-medium  rounded-md text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150">
                            <x-icon.login class="mr-3 h-6 w-6 text-white"></x-icon.login>
                            Login
                        </a>
                    </nav>
                </div>
                @endif
            </div>
        </div>

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button @click.stop="sidebarOpen = true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                    <x-icon.hamburger/>
                </button>
            </div>

            <main class="flex-1 relative z-0 overflow-y-auto pt-2 pb-6 focus:outline-none md:py-6" tabindex="0" x-data="" x-init="$el.focus()">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">Colorado Artisans - Dashboard</h1>
                   
                    <livewire:booked-resources />
                        @livewireScripts
                        @stack('scripts')
                </div>
            </main>
        </div>

    </div>
