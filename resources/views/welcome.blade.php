<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Laravel</h1>
    @if($name == 'hung')
        <h3>Hello Mr Hung</h3>
    @else
        <h3>Welcome {{$name}}</h3>
    @endif

    @for($i = 0; $i < count($numbers); $i++)
        <p>{{$numbers[$i]}}</p>
    @endfor
</body>
</html>
