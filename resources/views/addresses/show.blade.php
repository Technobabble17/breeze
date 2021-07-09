<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Address Book') }} {{--i18n https://laravel.com/docs/8.x/localization --}}
        </h2>
        <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('addresses.create') }}">+ New Address</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 bg-white overflow-hidden shadow-2xl sm:rounded-lg">
                <article class="p-6 bg-gray-300 border-b border-gray-200">
                    <h2 class="text-2xl bold pb-4">{{ $address->firstname}} {{ $address->lastname }}</h2>
                    <p>{{ $address->address1 }}</p>
                    <p>{{ $address->address2 }}</p>
                    <p>{{ $address->city }}</p>
                    <p>{{ $address->state }}</p>
                    <p>{{ $address->zip }}</p><br>
                    <p>{{ $address->email }}</p>
                    <p>{{ $address->primaryphone }}</p>
                </article>
            </div>
        </div>
    </div>

</x-app-layout>
