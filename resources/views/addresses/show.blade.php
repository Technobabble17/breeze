<!doctype html>



<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>

        <article>

            <a href="{{ route('addresses.index') }}"> Back </a>
            <h2>{{ $address->firstname }}</h2>
            <h2>{{ $address->lastname }}</h2>
            <p>{{ $address->address1 }}</p>
            <p>{{ $address->address2 }}</p>
            <p>{{ $address->city }}</p>
            <p>{{ $address->state }}</p>
            <p>{{ $address->zip }}</p>
            <p>{{ $address->email }}</p>
            <p>{{ $address->primaryphone }}</p>

        </article>

</body>
