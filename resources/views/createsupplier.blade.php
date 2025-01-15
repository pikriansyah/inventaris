<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
</head>
<body>
    <h1>Tambah Supplier</h1>

    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Supplier:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="kontak">Kontak Supplier:</label>
        <input type="text" name="kontak" id="kontak" required><br><br>

        <label for="alamat">Alamat Supplier:</label>
        <textarea name="alamat" id="alamat"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
</body>
</html>
