<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="{{ asset('css/tambahkategori.css') }}">
</head>
<body>
    <!-- Header (Navbar) -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Tambahkan Kategori, {{ Auth::user()->name }}</a>
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('kategori.index') }}">Lihat Kategori</a>
                <a href="{{ route('login') }}">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <div class="form-container">
            <h2>Tambah Kategori</h2>
            
            <form action="{{ route('kategori.store') }}" method="POST" class="kategori-form">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Kategori:</label>
                    <input type="text" name="nama" id="nama" class="input-field" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="input-field"></textarea>
                </div>
                <button type="submit" class="submit-btn">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>WEBSITE INVENTARIS ANDA</p>
    </footer>

    <!-- Pop-up untuk pesan sukses -->
    <div id="success-popup" class="popup">
        <div class="popup-content">
            <p>{{ session('success') }}</p>
            <button onclick="closePopup()">Tutup</button>
        </div>
    </div>

    <script>
        // Menampilkan pop-up jika ada pesan sukses
        document.addEventListener("DOMContentLoaded", function() {
            if ("{{ session('success') }}") {
                document.getElementById('success-popup').style.display = 'flex';
            }
        });

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById('success-popup').style.display = 'none';
        }
    </script>
</body>
</html>
