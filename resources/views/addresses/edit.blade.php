<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>
    <nav>
        <a href="{{ route('addresses.index') }}">Back<br></a>
    </nav>
<h1>Edit address</h1>
<div>
    <form method="post" action="{{ route('addresses.update', ['address'=> $address->id]) }}">
        {{ csrf_field() }}
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="firstname" class="col-sm-3 col-form-label">Edit First Name</label>
            <div class="col-sm-9">
                <input name="firstname" type="text" class="form-control" placeholder="First Name" value="{{ $address->firstname }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="lastname" class="col-sm-3 col-form-label">Edit Last Name</label>
            <div class="col-sm-9">
                <textarea name="lastname" type="text" class="form-control" placeholder="Last Name">{{ $address->lastname }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="address1" class="col-sm-3 col-form-label">Edit Address 1</label>
            <div class="col-sm-9">
                <textarea name="address1" type="text" class="form-control" placeholder="Address line 1">{{ $address->address1 }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="address2" class="col-sm-3 col-form-label">Edit Address 2</label>
            <div class="col-sm-9">
                <textarea name="address2" type="text" class="form-control" placeholder="Address line 2">{{ $address->address2 }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-sm-3 col-form-label">Edit Content</label>
            <div class="col-sm-9">
                <textarea name="city" type="text" class="form-control" placeholder="City">{{ $address->city }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-3 col-form-label">Edit State</label>
            <div class="col-sm-9">
                <textarea name="state" type="text" class="form-control" placeholder="State">{{ $address->state }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="zip" class="col-sm-3 col-form-label">Edit Zip</label>
            <div class="col-sm-9">
                <textarea name="zip" type="number" class="form-control" placeholder="zip">{{ $address->zip }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Edit Email</label>
            <div class="col-sm-9">
                <textarea name="email" type="number" class="form-control" placeholder="email">{{ $address->email }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="primaryphone" class="col-sm-3 col-form-label">Edit Primary Phone</label>
            <div class="col-sm-9">
                <textarea name="primaryphone" type="number" class="form-control" placeholder="primaryphone">{{ $address->primaryphone }}</textarea>
            </div>
        </div>

        <input type="submit" value="Update" ></input>
       {{-- <input type="reset"> troubleshoot a reset form button, probably need to be within, --}}

    </form>

</div>
</body>
