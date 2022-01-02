<div 
    x-data="{
        show: @entangle($attributes->wire('model')).defer
    }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    style="display: none"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40">

    <div class="fixed inset-0 bg-yellow-900 opacity-50" @click="show = false" x-show.transition="show"></div>

    <div class="bg-white shadow-md h-48 max-w-sm m-auto fixed inset-0 rounded-md">
        <div class="flex flex-col h-full justify-between">
            <header class="font-bold p-6 text-lg">
                {{ $title }}
            </header>

            <main class="mb-4 px-6">
                {{ $body }}
            </main>

            <footer class="px-6 py-2 bg-gray-200 flex justify-end rounded-b-md">
                {{ $footer }}
            </footer>
        </div>
    </div>