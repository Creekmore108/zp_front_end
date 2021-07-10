 <button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
        ]) }}>
    {{ $slot }}
</button>
