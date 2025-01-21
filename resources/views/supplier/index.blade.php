<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supplier</title>
    <link rel="stylesheet" href="{{ asset('css/supplier.css') }}">
</head>
<body>
    <!-- Header (Navbar) -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Daftar Supplier</a>
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('supplier.create') }}">Tambah Supplier</a>
                <a href="{{ route('login') }}">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Daftar Supplier -->
    <div class="container">
        <h1>Daftar Supplier</h1>

        <!-- Tabel Supplier -->
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->nama }}</td>
                        <td>{{ $supplier->kontak }}</td>
                        <td>{{ $supplier->alamat }}</td>
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
