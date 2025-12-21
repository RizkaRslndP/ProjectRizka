<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <article class="py-8 mx-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}
        </h2>
        <div>
            By
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"
                class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
            {{ $post['created_at']->format('j F Y') }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts
        </a>
    </article> --}}

    <article class="w-full text-center bg-neutral-primary-soft p-6">
        Published <a class="text-gray-500">{{ $post['created_at']->format('F j, Y, H:i') }} <span
                class="text-sm">({{ $post->created_at->diffForHumans() }})</a>
        <h2 class="mb-3 text-2xl tracking-tight font-semibold text-heading p-6">{{ $post['title'] }}</a></h2>
        <p class="mb-6 text-base text-body sm:text-lg -p-1">Keyword: <a href="/authors/{{ $post->author->username }}"
                class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a></p>
        <p class=" border-b border-gray-300 p-2 "></p>

        <div class="flex rounded-base -space-x-px p-3 relative" role="group">
            <div class="text-left md:p-6 px-5 py-4">
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
            </div>
            <button type="button"
                class="inline-flex items-center text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft font-medium leading-5 rounded-s-base text-sm px-3 py-2 focus:outline-none"
                disabled>
                <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
                My files
            </button>
            <button type="button"
                class="inline-flex items-center text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft font-medium leading-5 text-sm px-3 py-2 focus:outline-none">
                <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01" />
                </svg>
                Download
            </button>
            <button id="dropdownOptions" data-dropdown-toggle="dropdown-options" type="button"
                class="text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft font-medium leading-5 rounded-e-base text-sm px-3 py-2 focus:outline-none">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                        d="M6 12h.01m6 0h.01m5.99 0h.01" />
                </svg>
            </button>
            <div id="dropdown-options"
                class="z-10 bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-40 block hidden">
                <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownOptions">
                    <li>
                        <a href="#"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded-md">Save
                            as PDF</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded-md">Save
                            as doc</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded-md">Save
                            as image</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class=" border-b border-gray-300 p-2 "></p>
    </article>
</x-layout>
