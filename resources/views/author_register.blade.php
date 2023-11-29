<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth Create</title>
</head>

<body>

    <h3>Auth Create </h3>

    <form method="post" action="{{ route('author.store') }}">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name" />
        </div>

        <div>
            <input type="email" name="email" placeholder="Enter your email" />
        </div>

        <div>
            <input type="phone" name="phone" placeholder="Enter your phone" />
        </div>

        <div>
            <input type="submit" />
        </div>



    </form>

</body>

</html>
