<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Barang:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="kategoris_id">Kategori:</label>
        <select name="kategoris_id" id="kategoris_id" required>
            <option value="">Pilih Kategori</option>
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
</body>
</html>
