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
    @isset($hello)<h2>{{$hello}}</h2>@endisset
    <br>
    <a href="{{route('registration')}}">Регистрация</&nbsp&nbsp&nbsp&nbsp&nbsp>
    <a href="{{route('login')}}">Вход</a>
</body>
</html>
