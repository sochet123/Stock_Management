<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h2>Welcome Home Page</h2>

        @foreach($homes as $home)
            <ul>
                <li>Id : {{$home->id}}</li>
                <li>Title : {{$home->title}}</li>
                <li>Body : {{$home->body}}</li>
            </ul>
        @endforeach

</body>
</html>
