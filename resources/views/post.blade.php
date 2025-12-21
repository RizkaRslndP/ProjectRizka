<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="w-full bg-neutral-primary-soft p-6">
        <div class="text-center mb-6">
            Published <a class="text-gray-500">{{ $post['created_at']->format('F j, Y, H:i') }} <span
                    class="text-sm">({{ $post->created_at->diffForHumans() }})</a>
            <h2 class="mb-4 mt-3 text-2xl tracking-tight font-semibold text-heading p-6">{{ $post['title'] }}</a></h2>
            <p class="mb-6 text-base text-body sm:text-lg -p-1">Keyword: <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a></p>
        </div>
        <hr class="border-gray-300 my-4">
        <div class="flex flex-col gap-4 md:flex-row md:justify-between">
            <div class="text-left text-sm py-2">
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
            </div>
            <div class=" border-gray-300 py-1">
                <x-article-meta />
            </div>
        </div>
        <p class=" border-b border-gray-300 p-2 "></p>
        <p class="text-left my-4 font-light">{{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts
        </a>
    </article>
    {{-- <article class="w-full mx-auto p-6 bg-white border border-gray-300 rounded-lg shadow-md">
        <header class="mb-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $post['title'] }}</h1>
            <div class="text-sm text-gray-600">
                Published on {{ $post['created_at']->format('F j, Y') }} by
                <a href="/authors/{{ $post->author->username }}"
                    class="text-blue-500 hover:underline">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-blue-500 hover:underline">{{ $post->category->name }}</a>
            </div>
        </header>

        <div class="prose prose-lg max-w-none mb-6">
            {!! nl2br(e($post['body'])) !!}
        </div>

        <x-article-meta></x-article-meta>

        <footer class="mt-6">
            <a href="/posts" class="text-blue-500 hover:underline">&laquo; Back to Posts</a>
        </footer> --}}
</x-layout>
