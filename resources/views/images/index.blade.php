<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Image Library') }} {{--i18n https://laravel.com/docs/8.x/localization --}}
        </h2>
        <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('images.create') }}">+ New Address</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> {{--Rem is Root not relative (dont use em)--}}
             {{--Tailwind docs: padding6, each unit is a quarter rem (6 is 1.5rem/24px~) --}}
                <div class="mb-8 bg-white shadow-2xl sm:rounded-lg">
                    <article class="p-6 bg-white border-b border-gray-200 hover:bg-gray-200 hover:shadow-inner transition duration-200 ease-in-out">
                        <h2 class="text-2xl bold pb-4">{{ $path }}</h2>
                        <img src="{{url('app/public/images/')}}" alt="Image"/>

                    </article>
                </div>

        </div>
    </div>
</x-app-layout>
