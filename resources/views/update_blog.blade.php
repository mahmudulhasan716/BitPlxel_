<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Blog </title>
</head>

<body>
    <h3> Update blog</h3>

    <table>
        <thead>
            <tr>
                <td> SL.</td>
                <td> Title</td>
                <td> Content</td>
                <td> Published</td>
                <td> Action </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=> $data )
            <tr>
                <td> {{ ++$key }}</td>
                <td> {{ $data->title }}</td>
                <td> {{ $data->content }}</td>
                <td>
                    @if($data->published==1)
                    published
                    @else
                    not published
                    @endif
                </td>
                <td>
                    <a href={{ route("blog.show",$data->id) }} > Update</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
