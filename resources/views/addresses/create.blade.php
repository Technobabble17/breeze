<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>

    <nav>


    </nav>
    <form method="post" action="{{ route('addresses.store') }}">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="firstname" class="col-sm-3 col-form-label">First name</label>
            <div class="col-sm-9">
                <textarea name="firstname" type="text" class="form-control" placeholder="First">{{old('firstname')}}</textarea>
                @error('firstname') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="lastname" class="col-sm-3 col-form-label">Last name</label>
            <div class="col-sm-9">
                <textarea name="lastname" type="text" class="form-control" placeholder="Last">{{old('lastname')}}</textarea>
                @error('lastname') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="address1" class="col-sm-3 col-form-label">Address line 1</label>
            <div class="col-sm-9">
                <textarea name="address1" type="text" class="form-control" placeholder="Address 1"></textarea>
                @error('address1') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="address2" class="col-sm-3 col-form-label">Address line 2</label>
            <div class="col-sm-9">
                <textarea name="address2" type="text" class="form-control" placeholder="Address 2">{{old('address2')}}</textarea>
                @error('address2') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-sm-3 col-form-label">City</label>
            <div class="col-sm-9">
                <textarea name="city" type="text" class="form-control" placeholder="Colorado Springs">{{old('city')}}</textarea>
                @error('city') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-3 col-form-label">State Abbreviation</label>
            <div class="col-sm-9">
                <input name="state" type="text" class="form-control" placeholder="AL" pattern="[A-Z]{2}" onkeyup="this.value = this.value.toUpperCase();" value="{{old('state')}}"/> {{--this work but doesnt maintain cursor position when correcting a mistake, apparently needs javascript?--}}
                {{--<textarea name="state" type="text" class="form-control" placeholder="CO">{{old('state')}}</textarea>--}}
                @error('state') <p style="color:red"> {{ $message }}</p>  @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="zip" class="col-sm-3 col-form-label">Zip</label>
            <div class="col-sm-9">
                <textarea name="zip" type="number" class="form-control" placeholder="#####">{{old('zip')}}</textarea>
                @error('zip') <p style="color:red"> {{ $message }}</p>  @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <textarea name="email" type="string" class="form-control" placeholder="jon@conflare.com">{{old('email')}}</textarea>
                @error('email') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <div class="form-group row">
            <label for="primaryphone" class="col-sm-3 col-form-label">Primary Phone</label>
            <div class="col-sm-9">
                <textarea name="primaryphone" type="string" class="form-control" placeholder="(330)527-5263">{{old('primaryphone')}}</textarea>
                @error('primaryphone') <p style="color:red"> {{ $message }}</p>  @enderror

            </div>
        </div>

        <input type="submit" value="Save"></input>


    </form>
    <br><br><br><br><br><br>
    <a href="{{ route('addresses.index') }}">Back<br></a>
</body>
