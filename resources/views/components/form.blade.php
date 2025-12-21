<form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <!-- field lain -->
    <input type="text" name="title" value="{{ $post->title }}" class="border p-2 w-full">

    <!-- UPLOAD PDF -->
    <div class="mt-4">
        <label class="block text-sm font-medium">Upload PDF</label>
        <input type="file" name="pdf" accept="application/pdf" class="mt-1 block w-full text-sm">
    </div>

    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">
        Simpan
    </button>
</form>
