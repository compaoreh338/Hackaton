<div id="modal-record-delete" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-hide="modal-record-delete">
                <x-icons.cancel/>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">{{ __('Are you sure ?') }}</h3>
                <form class="space-y-6" method="post" :action="deleteItem.route">
                    @csrf
                    <div>
                        <span>{{ __('You are going to delete') }}
                            "<span x-text="deleteItem.title"></span>"
                        </span>
                    </div>
                    <div class="flex justify-end space-x-2 pt-4 rtl:space-x-reverse">
                        <button data-modal-hide="modal-record-delete" type="button"
                                class="inline-flex items-center text-sm font-medium relative rounded-none transition-colors text-emphasis h-9 px-4 py-2.5 hover:bg-gray-100">
                            {{ __('Close') }}
                        </button>
                        <x-buttons.primary class="bg-red-900 rounded-none font-normal">
                            {{ __('Delete') }}
                        </x-buttons.primary>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
