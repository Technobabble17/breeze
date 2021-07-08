<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>
    <a href="{{ route('posts.create') }}">New</a>


    <?php foreach ($posts as $post) : ?>
        <article>

            <h2>{{ $post->title }}</h2> {{--}} where is title created as an object already? so that $post can reference it?--}}
           <a href="{{ route('posts.show',['post'=> $post->id]) }}"> Read More <br></a> {{--!route to a show blade that contains the matching array of 'post' that is also match $post where the id???what? how does it know each loops id and associated post--}}

           <a href="{{ route('posts.edit',['post'=> $post->id]) }}"> Edit Post <br></a>


           <form action="{{ route('posts.destroy',['post'=> $post->id]) }}" method="POST">
            <input class="btn btn-default" type="submit" value="Delete Post" />
            @method('delete')
            @csrf
            </form>

        </article>
    <?php endforeach; ?>
    <div>
        <br><br><br><br><br><br>
        <a href="{{ route('addresses.index') }}">Address Book<br></a>
    </div>
</body>
