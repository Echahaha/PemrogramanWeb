<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>
    <form action="{{route('produk.create')}}">
        <button type="submit">Tambah Data</button>
    </form>
    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Merek</th>
            <th>Qty</th>
            <th>Actions</th>
        </tr>
        @foreach($produk as $product)
        <tr>
            <td>{{$product->nama_produk}}</td>
            <td>{{$product->merek}}</td>
            <td>{{$product->qty}}</td>
            <td>
                <form action="{{ route('produk.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
