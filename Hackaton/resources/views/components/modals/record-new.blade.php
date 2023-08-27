@props(['placeholder', 'route', 'title' ])

<div id="modal-record-new" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-hide="modal-record-new">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">{{ $title }}</h3>
                <form class="space-y-6" method="post" action="{{ $route }}">
                    @csrf
                    <div>
                        <label for="title"
                               class="block mb-2 text-sm font-medium text-gray-900">{{__("Nom")}}</label>
                        <input type="text" name="title" id="title"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                               placeholder="{{ $placeholder }}" required>
                    </div>
                    <div class="flex justify-end space-x-2 pt-4 rtl:space-x-reverse">
                        <button data-modal-hide="modal-record-new" type="button"
                                class="inline-flex items-center text-sm font-medium relative rounded-md transition-colors text-emphasis h-9 px-4 py-2.5 hover:bg-gray-100">
                            {{ __('Close') }}
                        </button>
                        <button type="submit"
                                class="inline-flex items-center text-sm font-medium relative hover:bg-blue-800 rounded-md transition-colors h-9 px-4 py-2.5 bg-primary text-white">
                            {{ __('Continuer') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
