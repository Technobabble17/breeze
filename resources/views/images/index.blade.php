<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Image Library') }} {{--i18n https://laravel.com/docs/8.x/localization --}}
        </h2>
        <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('images.create') }}">+ New Image</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> {{--Rem is Root not relative (dont use em)--}}
           @foreach ($images as $image )
           <div class="mb-8 bg-white shadow-2xl sm:rounded-lg">
               <article class="p-6 bg-white border-b border-gray-200 hover:bg-gray-200 hover:shadow-inner transition duration-200 ease-in-out">
                    <h2 class="text-2xl bold pb-4">{{ $image->title }}</h2>
                    <p class="text-lg pb-4">{{ $image->description }}</p>
                    <img src="{{Storage::disk('public')->url($image->path);}}" alt="Image" class="max-h-32"/><br>
                    <x-element.delete route-key="image" label="Delete Image" route-name="images.destroy" :id="$image->id"/> {{-- the : says we are passing native php--}}
                </article>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
