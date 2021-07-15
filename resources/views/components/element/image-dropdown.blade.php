<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <label for="image" class="col-sm-3 col-form-label">{{$title}}</label>
    <div class="p-6 bg-white border-b border-gray-200">
        <select name="{{$fieldName}}">
            @foreach ( $images as $image )
            <option value="{{$image->id}}">{{$image->title}}</option>
            @endforeach
        </select>
        @error('image') <p style="color:red"> {{ $message }}</p>  @enderror
    </div>
