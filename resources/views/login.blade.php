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
@if(Session::has('warning'))
<p class="alert alert-info">{{ Session::get('warning') }}</p>
@endif
    <h2>Авторизация</h2>
    <form action="{{route('signin')}}" method="POST">
        @csrf
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Авторизация</button>
    </form>
</body>
</html>
