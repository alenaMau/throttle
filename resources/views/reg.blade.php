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
    <h2>Регистрация</h2>
    <form action="{{route('store')}}" method="POST">
        @csrf
        @isset($er)
            @foreach($er as $item)
                <div style="color:red;">{{$item}}</div>
            @endforeach
        @endisset
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="password1" name="password1">
        <input type="password" placeholder="password2" name="password2">
        <button type="submit">Регистрация</button>
        @isset($msg)
            @for($i=0;$i<10;$i++)
                <div style="color:red;">{{$msg}}</div>
            @endfor
        @endisset
    </form>

</body>
</html>
