<x-app-layout>
    <x-slot name="header">
        @if (Auth::check())
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }}
        </h2>
        <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('posts.create') }}">+ New Post</a>
        @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Public Blog Posts') }}
        </h2>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 bg-white overflow-hidden shadow-2xl sm:rounded-lg">
                <article class="p-6 bg-gray-300 border-b border-gray-200">
                    <h2 class="text-2xl bold pb-4">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </article>
            </div>
        </div>
    </div>
</x-app-layout>
