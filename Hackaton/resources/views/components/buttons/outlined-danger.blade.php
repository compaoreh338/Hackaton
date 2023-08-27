@props([
    'icon' => null,
    'classes' => '',
])

<button
    {{
        $attributes->merge([
            'class' => "py-2 px-2 relative text-red-900 border border-red-900 hover:bg-red-900 hover:text-white $classes",
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
