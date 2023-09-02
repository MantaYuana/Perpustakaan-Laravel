<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('../css/app.css');
    </style>
</head>

<body>
    <h1>Hello, {{$userData["username"]}}</h1>
    <p>Crazy that you're {{$userData["age"]}} years old now</p>
    <p>Want to read some more {{$userData["favorite"]}} books ? <a href="./books/details">Read More</a></p>

    <div class="book-container">
        @foreach ($bookData as $x)
        <table>
            <tr>
                <td>
                    <p>{{$x["id"]}}</p>
                </td>
                <td>
                    <p>{{$x["title"]}}</p>
                </td>
                <td>
                    <a href="./books/details"><img src="{{$x['image']}}"></img></a>
                </td>
                <td>
                    <p>{{$x["desc"]}}</p>
                </td>
            </tr>
        </table>
        @endforeach
    </div>
</body>

</html>