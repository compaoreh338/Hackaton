@props([
    'icon' => null,
    'classes' => '',
])

<button
    {{
        $attributes->merge([
            'class' => "py-2 px-2 relative text-black-500 border border-white-500 hover:bg-white-500 hover:text-black $classes",
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
