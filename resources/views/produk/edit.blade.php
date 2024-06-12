<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"><br>
        <label>Merek:</label>
        <input type="text" name="merek" value="{{ $produk->merek }}"><br>
        <label>Qty:</label>
        <input type="number" name="qty" value="{{ $produk->qty }}"><br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('produk.index') }}">Kembali</a>
</body>
</html>
