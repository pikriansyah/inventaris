<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Kategori</title>
    <link rel="stylesheet" href="{{ asset('css/tambahkategori.css') }}">
</head>
<body>
    <!-- Header (Navbar) -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Lihat Kategori, {{ Auth::user()->name }}</a>
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('kategori.create') }}">Tambah Kategori</a>
                <a href="{{ route('login') }}">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1>Daftar Kategori</h1>

        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>WEBSITE INVENTARIS ANDA</p>
    </footer>
</body>
</html>
