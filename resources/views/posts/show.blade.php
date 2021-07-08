<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>

        <article>

            <a href="{{ route('posts.index') }}"> Back </a>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </article>

</body>
