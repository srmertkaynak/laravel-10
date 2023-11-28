<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ürünler</h1>
    @foreach ($products as $product)
        <h3>{{ $product->name }} (Adet: {{ $product->qty }})</h3>
        <p>{{ $product->description }}</p>
        <p>Fiyat: {{ $product->price }}</p>
        <a href="/urunler/sil/{{ $product->id }}">Sil</a>
    @endforeach
</body>

</html>
