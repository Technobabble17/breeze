<!doctype html>



<title> Address Book </title>
<link rel="stylesheet" href="/app.css">

<body>
    <nav>
        <a href="{{ route('posts.index') }}"> Blog Page <br></a>
        <a href="{{ route('addresses.create') }}"> Add </a>
    </nav>



    <?php foreach ($addresses as $address) : ?>
        <article>

            <h2>{{ $address->lastname, $address->firstname }}</h2>
           <a href="{{ route('addresses.show',['address'=> $address->id]) }}"> View <br></a>

           <a href="{{ route('addresses.edit',['address'=> $address->id]) }}"> Edit address <br></a>


           <form action="{{ route('addresses.destroy',['address'=> $address->id]) }}" method="POST">
            <input class="btn btn-default" type="submit" value="Delete address" />
            @method('delete')
            @csrf


        </article>

    <?php endforeach; ?>
</body>
