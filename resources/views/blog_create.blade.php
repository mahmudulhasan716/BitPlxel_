<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog create</title>
</head>

<body>
    <h3> blog Create</h3>

    <form method="post" action="{{ route('blog.store') }}">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Enter Title" />
        </div>
        <div>
            <input type="text" name="content" placeholder="Enter Content" />
        </div>
        <div>
            <label> published </label>
            <input type="radio" name="published" value="1" />
        </div>
        <div>
            <label> Not published </label>
            <input type="radio" name="published" value="0" />
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>

    <br />
    <br />

    <div>
        <a href="{{ route('blog.create') }}"> Mange Data </a>
    </div>


</body>

</html>
