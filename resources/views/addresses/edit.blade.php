<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Address Book') }} {{--i18n https://laravel.com/docs/8.x/localization --}}
        </h2>
        <a class="text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition duration-300 ease-in-out" href="{{ route('addresses.create') }}">+ New Address</a>
    </x-slot>

        <form method="post" action="{{ route('addresses.update', ['address'=> $address->id]) }}">
            {{ csrf_field() }}
            @method('PUT')
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="firstname" class="col-sm-3 col-form-label">First name</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="firstname" type="text" class="form-control" placeholder="First Name">{{ $address->firstname }}</textarea>
                    @error('firstname') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="lastname" class="col-sm-3 col-form-label">Last name</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="lastname" type="text" class="form-control" placeholder="Last Name">{{ $address->lastname }}</textarea>
                    @error('lastname') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="address1" class="col-sm-3 col-form-label">Address 1</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="address1" type="text" class="form-control" placeholder="Address1">{{ $address->address1 }}</textarea>
                    @error('address1') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="address2" class="col-sm-3 col-form-label">Address 2</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="address2" type="text" class="form-control" placeholder="Address2">{{ $address->address2 }}</textarea>
                    @error('address2') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="city" class="col-sm-3 col-form-label">City</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="city" type="text" class="form-control" placeholder="City">{{ $address->city }}</textarea>
                    @error('city') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="state" class="col-sm-3 col-form-label">State</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="state" type="text" class="form-control" placeholder="AL">{{ $address->state }}</textarea>
                    @error('state') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="zip" class="col-sm-3 col-form-label">Zip Code</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="zip" type="text" class="form-control" placeholder="#####">{{ $address->zip }}</textarea>
                    @error('zip') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="email" type="text" class="form-control" placeholder="jon@conflare.com">{{ $address->email }}</textarea>
                    @error('email') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <label for="primaryphone" class="col-sm-3 col-form-label">Primary Phone</label>
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea name="primaryphone" type="text" class="form-control" placeholder="1234567890">{{ $address->primaryphone }}</textarea>
                    @error('primaryphone') <p style="color:red"> {{ $message }}</p>  @enderror
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-64">
                <input class="rounded-lg text-white text-2xl col-sm-3 col-form-label cursor-pointer p-2 px-8 bg-blue-600 hover:bg-green-600 transition duration-200 ease-in-out" type="submit" value="Save"></input>
            </div>
    </form>

</x-app-layout>
