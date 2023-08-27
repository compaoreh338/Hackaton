<div class="w-full">
    <h1 class="text-4xl font-bold text-black mb-4 uppercase">
        {{ __('Entity  creation') }}
    </h1>
    <hr class="border-[0.5px] p-0 m-0 border-gray-400" />
    <hr class="border-black border-[1.5px] mt-1 mb-5" />
    <form method="POST" action="{{ route('category.create') }}" enctype="multipart/form-data" class="flex flex-col gap-3">
        @csrf


        <div class="w-full">
            <input name="name" type="string" :label="__('Name')" :value="old('name') ?? $category - > name" />

        </div>

        <div class="flex justify-end gap-2">
            <button class="mt-10" :href="route('category.list')" color="gray">{{ __('Back') }}</button>
            <button class="mt-10 bg-red-900 rounded-none font-normal">{{ __('Add') }}</button>
        </div>
    </form>
</div>
