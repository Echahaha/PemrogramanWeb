<h1>Tambah Data</h1>

<form action="{{route('produk.store')}}" method="POST">
    @csrf
    <input type="text" name="nama_produk" placeholder="Nama">
    <br>
    <input type="text" name="merek" placeholder="Merek">
    <br>
    <input type="text" name="qty" placeholder="Qty">
    <br>
    <input type="submit">
</form>