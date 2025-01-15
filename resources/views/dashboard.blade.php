<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Hallo, {{ Auth::user()->name }}</a> 
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('supplier.index') }}">Lihat Barang</a>
                <a href="{{ route('login') }}">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="nav-links">
            <a href="{{ route('barang.store') }}" class="card">
                <img src="{{ asset('images/travel.png') }}" alt="Tambah Barang" class="card-img">
                <div class="card-text">Tambah Barang</div>
            </a>
            <a href="{{ route('supplier.create') }}" class="card">
                <img src="{{ asset('images/delivery.png') }}" alt="Tambah Supplier" class="card-img">
                <div class="card-text">Tambah Supplier</div>
            </a>
            <a href="{{ route('kategori.create') }}" class="card">
                <img src="{{ asset('images/kategori.png') }}" alt="Tambah Kategori" class="card-img">
                <div class="card-text">Tambah Kategori</div>
            </a>
        </div>
    </div>

    <footer>
        <p>WEBSITE INVENTARIS ANDA</p>
    </footer>
    
</body>
</html>
