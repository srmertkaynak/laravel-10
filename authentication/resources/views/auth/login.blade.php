<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>

<body>
    @if (session()->has('login'))
        {{ session('login') }}
    @endif

    @if (session()->has('register'))
        {{ session('register') }}
    @endif
    @guest
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" required placeholder="E-Mail">
            <br>
            <input type="password" name="password" required placeholder="Password">
            <br>
            <button type="submit">Login</button>
        </form>
    @endguest
    @auth
        <a href="{{ route('logout') }}">Logout</a>
    @endauth
</body>

</html>
