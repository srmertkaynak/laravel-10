<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Düzenle</title>
</head>

<body>
    <h1>Ürün Düzenle</h1>
    <form action="/urunler/duzenle/{{ $product->id }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ $product->name }}" placeholder="Ürün Adı"><br>
        <textarea name="description" placeholder="Açıklama" rows="10">{{ $product->description }}</textarea><br>
        <input type="number" name="price" placeholder="Fiyat" value="{{ $product->price }}"><br>
        <input type="number" name="qty" placeholder="Stok Bilgisi" value="{{ $product->qty }}"><br>
        <input type="checkbox" name="isPublish" {{ $product->isPublish == 1 ? 'checked' : '' }}> Yayınla <br>
        <button type="submit">Güncelle</button>
    </form>

</body>

</html>
