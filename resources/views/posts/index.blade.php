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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> {{--Rem is Root not relative (dont use em)--}}
            <?php foreach ($posts as $post) : ?> {{--Tailwind docs: padding6, each unit is a quarter rem (6 is 1.5rem/24px~) --}}
                <div class="mb-8 bg-white shadow-2xl sm:rounded-lg">
                    <article class="p-6 bg-white border-b border-gray-200 hover:bg-gray-200 hover:shadow-inner transition duration-200 ease-in-out">
                        <h2 class="text-2xl bold pb-4">{{ $post->title, $post->content }}</h2>
                        @if (Auth::check() && Auth::user()->id === $post->user_id)
                            <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('posts.show',['post'=> $post->id]) }}">View</a> |
                            <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('posts.edit',['post'=> $post->id]) }}">Edit Post</a> |
                            <form class=" inline" action="{{ route('posts.destroy',['post'=> $post->id]) }}" method="POST">
                                <input class="cursor-pointer bg-transparent text-red-600 border-b-2 border-transparent hover:border-red-600 transition duration-300 ease-in-out" type="submit" value="Delete Post" />
                                @method('delete')
                                @csrf
                            </form>
                        @else
                            <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('blog.show',['blog'=> $post->id]) }}">View</a>
                        @endif
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</x-app-layout>
