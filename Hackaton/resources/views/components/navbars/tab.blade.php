@props([
    'tabs' => [],
])

<div x-data="{ openTab: 1 }" class="w-full">
    <div class="bg-gray-300 w-full">
        <div class="flex flex-wrap w-full">
            @foreach($tabs as $index => $tab)
                <button class="w-1/4 text-center relative px-4 py-4 hover:bg-red-900 hover:text-white focus:outline-none"
                        :class="{ 'font-medium bg-red-900 text-white h-full active-tab': openTab === {{ $index + 1 }} }"
                        @click="openTab = {{ $index + 1 }}">{{ $tab }}</button>
            @endforeach
        </div>
    </div>
    <div class="w-full pt-4">
        {{ $slot }}
    </div>
</div>
