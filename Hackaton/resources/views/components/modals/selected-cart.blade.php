@props(['options' ])

<div id="save-cart" tabindex="-1" aria-hidden="true"
     class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" id="closeModal"
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
                <h3 class="mb-4 text-xl font-medium text-gray-900"></h3>

                    @csrf
                    <div>
                        <label for="title"
                               class="block mb-2 text-sm font-medium text-gray-900">{{__("Nom")}}</label>
                        <label>{{ _('Replace a wishlist') }}</label>
                        <select id="replace-wishlist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        >
                            <option></option>
                            @foreach($options as $key => $option)
                                    <option id="name-wishlist" value="{{ $key }}" }}>
                                        {{ $option }}
                                    </option>
                            @endforeach
                        </select>
                        <label>{{ _('New wishlist') }}</label>
                        <input type="text" name="new-wishlist" id="new-wishlist"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                               placeholder="">

                        <button id="save-wishlist">{!! _('Save or replace wishlist') !!}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('closeModal').addEventListener('click', function(event) {
            document.getElementById('save-cart').classList.add('hidden');
    });
    saveCart = document.getElementById('save-cart');
    saveCart.addEventListener('click', function(event) {

        if (event.target === saveCart) {
            saveCart.classList.add('hidden');
        }
    });
</script>
