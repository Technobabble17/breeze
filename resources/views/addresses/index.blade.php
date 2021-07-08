<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Address Book') }} {{--i18n https://laravel.com/docs/8.x/localization --}}
        </h2>
        <a href="{{ route('addresses.create') }}">New Address</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> {{--Rem is Root not relative (dont use em)--}}
            <?php foreach ($addresses as $address) : ?> {{--Tailwind docs: padding6, each unit is a quarter rem (6 is 1.5rem/24px~) --}}
                <div class="mb-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <article class="p-6 bg-white border-b border-gray-200">

                        <h2 class="text-2xl bold">{{ $address->lastname, $address->firstname }}</h2>
                        <a class="text-blue-600 hover:border-b hover:border-blue-600" href="{{ route('addresses.show',['address'=> $address->id]) }}">View</a> |

                        <a class="text-blue-600 hover:border-b hover:border-blue-600" href="{{ route('addresses.edit',['address'=> $address->id]) }}">Edit address</a> |

                        <form class=" inline" action="{{ route('addresses.destroy',['address'=> $address->id]) }}" method="POST">
                            <input class="text-blue-600 bg-transparent cursor-pointer hover:border-b hover:border-blue-600" type="submit" value="Delete address" />
                            @method('delete')
                            @csrf
                        </form>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</x-app-layout>
