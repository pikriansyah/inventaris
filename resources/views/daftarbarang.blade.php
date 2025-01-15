<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>

    @foreach ($barangs as $barang)
        <div>
            <h2>{{ $barang->nama }}</h2>
            <p>Kategori: {{ $barang->kategori->nama }}</p>
            <p>Jumlah: {{ $barang->jumlah }}</p>
        </div>
    @endforeach

    <a href="{{ route('barang.create') }}">Tambah Barang</a><br>
    <a href="{{ route('supplier.create') }}">Tambah Supplier</a><br>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
