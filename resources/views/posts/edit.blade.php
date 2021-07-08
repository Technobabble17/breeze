<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>
<h1>Edit Post</h1>
    <form method="post" action="{{ route('posts.update', ['post'=> $post->id]) }}"><! this array was missing. why doesn't this load just like create.blade. call method of "PUT" is below.. also have to be able to update the correct post>
        {{ csrf_field() }}
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Edit Title</label> <! the content here and below should pre-fill from what is already in the database>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Post Title" value="{{old('title', $post->title)}}"/>
                @error('title') <p style="color:red"> {{ $message }}</p>  @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">Edit Content</label>
            <div class="col-sm-9">
                <textarea name="content" type="text" class="form-control" placeholder="Post Content">{{old('content', $post->content)}}</textarea> {{--content is passed in from the post controller when it loads.--}}
                @error('content') <p style="color:red"> {{ $message }}</p>  @enderror
            </div>
        </div>

        <input type="submit"> Edit Post </input>


    </form>
    <br><br><br><br><br><br>
    <a href="{{ route('posts.index') }}">Back<br></a>
</body>
