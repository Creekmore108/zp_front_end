{{-- square box around icon with bgcolor --}}
@props([
    'title',
    'text',
    'bgcolor'
])

<div>
    <div>
        <span class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-600">

        {{ $slot }}

         </span>
    </div>
    <div class="mt-6">
        <h3 class="text-lg font-extrabold text-white">{{ $title }}</h3>
            <p class="mt-2 text-base text-white">
            {{ $text }}
            </p>
    </div>
</div>