@props([
    'title',
    'icon',
    'link',
    'active' => false,
    'class' => ''
])

<li class="list-none">
    <a href="{{ $link }}"
       class="{{ $class }} flex items-center text-black p-2 {{ $active ? 'font-bold text-xl' : '' }} hover:font-bold transition-colors">
        @isset($icon)
            <i class="{{ $icon }} mr-2"></i>
        @endisset
        <span>{{ $title }}</span>
    </a>
</li>
