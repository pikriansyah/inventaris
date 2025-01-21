<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link rel="stylesheet" href="{{ asset('css/supplier.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Tambah Supplier, {{ Auth::user()->name }}</a>
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('supplier.index') }}">Lihat Supplier</a>
                <a href="{{ route('login') }}">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Tambah Supplier</h2>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Supplier</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak Supplier</label>
                <input type="text" name="kontak" id="kontak" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Supplier</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
            <button type="submit" class="submit-btn">Simpan</button>
        </form>
    </div>

    <footer>
        <p>WEBSITE INVENTARIS ANDA</p>
    </footer>
</body>
</html>
