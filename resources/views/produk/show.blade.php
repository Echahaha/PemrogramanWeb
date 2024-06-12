<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <p>Nama Produk: {{ $produk->nama_produk }}</p>
    <p>Merek: {{ $produk->merek }}</p>
    <p>Qty: {{ $produk->qty }}</p>
    <a href="{{ route('produk.index') }}">Kembali</a>
</body>
</html>
