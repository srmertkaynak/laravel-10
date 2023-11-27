<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <a href="{{ route('homepage') }}">Ana Sayfa</a>
    <a href="{{ route('blog.index') }}">Yazılar</a>
    <h1>{{ $title }}</h1>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias nisi laborum porro temporibus sapiente,
        obcaecati odio quas esse possimus nemo.
    </p>
</body>

</html>
