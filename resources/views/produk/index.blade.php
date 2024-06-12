<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('produk.create') }}">
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
            <td>{{ $product->nama_produk }}</td>
            <td>{{ $product->merek }}</td>
            <td>{{ $product->qty }}</td>
            <td>
                <a href="{{ route('produk.show', $product->id) }}">View</a>
                <a href="{{ route('produk.edit', $product->id) }}">Edit</a>
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
