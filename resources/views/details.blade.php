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
    <h1>A Book Called: {{$book["title"]}}</h1>
    <p>It's got {{$book["pages"]}} page and published in {{$book["publish_date"]}}</p>
    <p>It was written by {{$book["author"]}} and published by {{$book["publisher"]}}</p>
    <img src="{{$book['image']}}">
    <p>{{$book['desc']}}</p>
    <p>Category: {{$book['category']}}, Language: {{$book['language']}}, Subject: [{{implode(", ",$book["subjects"]);}}]</p>
</body>

</html>