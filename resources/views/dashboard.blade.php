<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, {{ Auth::user()->name }}!</h1>  <!-- nama diubah menjadi name -->

    <!-- Navigasi ke fitur tambah barang dan tambah supplier -->
    <a href="{{ route('barang.create') }}">Tambah Barang</a><br>
    <a href="{{ route('supplier.create') }}">Tambah Supplier</a><br>
    <a href="{{ route('barang.index') }}">Lihat Barang</a><br>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
