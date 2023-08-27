<div class="mx-auto">


    <div class="relative bg-gray-200 mt-0  min-h-[119px]">
        <div
            class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex min-h-[119px]">
            <div class="w-[calc(100%-238px)] flex flex-wrap mx-auto min-h-[119px]">

                @foreach($categories as $category)
                    <button
                        class="refreshSubMenu p-4 relative rounded-none focus:outline-none min-w-[119px] min-h-[119px]
                       {{ $activeCategory === $category ? 'bg-red-900 text-white active-tab' : 'bg-transparent text-black hover:bg-red-900 hover:text-white hover:active-tab' }}"
                        data-id-category="{{ $category->id }}"
                    >
                        {{ $category->name }}
                    </button>
                @endforeach
                    <script>
                        const refreshSubMenu = document.querySelectorAll('.refreshSubMenu');

                        refreshSubMenu.forEach(button => {
                            button.addEventListener('click', function() {
                                const catId = button.getAttribute('data-id-category');
                                Livewire.emit('refreshSubmenu', catId);
                            });
                        });
                    </script>
            </div>
            <div class="absolute inset-y-0 left-2 flex items-center">
                <button
                    class="p-1 rounded-[50%] flex items-center justify-center border-[1px] border-gray-700 bg-transparent w-[28px] h-[28px]">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            <div class="absolute inset-y-0 right-2 flex items-center">
                <button
                    class="p-1 rounded-[50%] flex items-center justify-center border-[1px] border-gray-700 bg-transparent w-[28px] h-[28px]">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
