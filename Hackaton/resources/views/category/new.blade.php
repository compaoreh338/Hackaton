<h1>
    <form method="POST" action="{{ route('category.create') }}" enctype="multipart/form-data" class="flex flex-col gap-3">
        @csrf
        <input type="text" name="name" label="Name">
        <button type="submit">submit</button>
    </form>

</h1>
