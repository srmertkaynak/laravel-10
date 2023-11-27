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
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach
</body>

</html>
