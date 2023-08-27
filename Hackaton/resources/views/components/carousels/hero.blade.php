@props([
    'image' => '',
    'title' => '',
    'subTitle' => null,
])

<div class="relative">
    <div class="absolute w-full h-96 bg-black bg-opacity-50"></div>
    <img src="{{ $image }}" alt="Category image" class="w-full h-96 object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center w-full">
            <h1 class="text-4xl font-bold text-white dark:text-gray-100">
                {{ $title }}
            </h1>
            <p class="text-xl text-white dark:text-gray-100">
                @isset($subTitle)
                    {{ $subTitle }}
                @endisset
            </p>
        </div>
    </div>
    {{ $slot }}
</div>
