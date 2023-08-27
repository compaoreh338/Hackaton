@props([
    'icon' => null,
    'classes' => '',
])

<button
    {{
        $attributes->merge([
            'class' => "py-2 px-2 relative text-gray-500 border border-gray-500 hover:bg-gray-500 hover:text-white $classes",
            'type' => 'button',
        ])
    }}>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    <span>
        {{ $slot }}
    </span>
</button>
