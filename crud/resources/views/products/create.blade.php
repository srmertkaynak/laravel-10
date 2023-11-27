<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Ekle</title>
</head>

<body>
    <h1>Ürün Ekle</h1>
    <form action="/urunler/ekle" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ürün Adı"><br>
        <textarea name="description" placeholder="Açıklama" rows="10"></textarea><br>
        <input type="number" name="price" placeholder="Fiyat"><br>
        <input type="number" name="qty" placeholder="Stok Bilgisi"><br>
        <input type="checkbox" name="isPublish"> Yayınla <br>
        <button type="submit">Ekle</button>
    </form>
</body>

</html>
