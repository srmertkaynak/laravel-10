<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 - Login & Register</title>
</head>

<body>

    <div>
        <p>
            @if (session()->has('login'))
                {{ session('login') }}
            @endif
        </p>
        <p>
            <a href="{{ route('login') }}">Login</a>
        </p>
        <p>
            <a href="{{ route('register') }}">Register</a>
        </p>
        <br>

    </div>

</body>

</html>
