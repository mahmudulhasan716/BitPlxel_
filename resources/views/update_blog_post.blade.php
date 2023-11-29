<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Blog post</title>
</head>

<body>
    <br />
    <form method="post" action="{{ route('blog.update',$blog->id) }}">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="title" value="{{ $blog->title }}" />
        </div>
        <div>
            <input type="text" name="content" value="{{ $blog->content }}" />
        </div>
        <div>
            <input type="text" name="author_id" value="{{ $blog->author_id }}" />
        </div>
        <div>
            <label> published </label>
            <input type="radio" name="published" value="1" @if($blog->published==1) checked @endif/>
        </div>
        <div>
            <label> Not published </label>
            <input type="radio" name="published" value="0" @if( $blog->published== 0) checked @endif />
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
</body>

</html>
