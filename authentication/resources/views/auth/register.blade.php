<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>

<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" required placeholder="Name">
        <br>
        <input type="email" name="email" required placeholder="E-Mail">
        <br>
        <input type="password" name="password" required placeholder="Password">
        <br>
        <button type="submit">Register</button>
    </form>
</body>

</html>
