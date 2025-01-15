<!-- resources/views/supplier/edit.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
</head>
<body>
    <h1>Edit Supplier</h1>

    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama Supplier:</label>
        <input type="text" name="nama" id="nama" value="{{ $supplier->nama }}" required><br><br>

        <label for="kontak">Kontak:</label>
        <input type="text" name="kontak" id="kontak" value="{{ $supplier->kontak }}" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat">{{ $supplier->alamat }}</textarea><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="{{ route('supplier.index') }}">Kembali</a>
</body>
</html>
