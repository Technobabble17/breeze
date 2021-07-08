<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>

    <form method="post" action="{{ route('posts.store') }}">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Post Title" value="{{old('title')}}"/>
                @error('title') <p style="color:red"> {{ $message }}</p>  @enderror {{--error directive--}}
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">Content</label>
            <div class="col-sm-9">
                <textarea name="content" type="text" class="form-control" placeholder="Post Content">{{old('content')}}</textarea>
                @error('content') <p style="color:red"> {{ $message }}</p>  @enderror
            </div>
        </div>

        <input type="submit"> New Post </input>


    </form>
    <br><br><br><br><br><br>
    <a href="{{ route('posts.index') }}">Back<br></a>
</body>
