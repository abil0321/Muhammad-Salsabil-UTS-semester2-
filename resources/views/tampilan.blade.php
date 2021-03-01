<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="title" style="background-color: aquamarine">
    <h1 style="color: white">UTS Semester 2</h1>
</div>

@foreach ($data as $item)
<div class="container">
    {{$item->id}}    
<div class="nama"> 
    <span> Nama : {{$item->nama_produk}}</span>
</div>

<div class="kode">
    <span> Kode : {{$item->kode_produk}}</span>
</div>

<div class="harga">
    <span>Harga : {{$item->harga}}</span>
</div>

<div class="created">
    <span>Harga : {{$item->created_at}}</span>
</div>

</div>
<br>
@endforeach

</body>
</html>