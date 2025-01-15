<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;  /* Agar elemen bisa ditumpuk secara vertikal */
        }

        .info-text {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;  /* Memberikan jarak antara teks dan form login */
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-messages {
            color: red;
            margin-top: 10px;
            font-size: 14px;
            text-align: left;
        }

        .error-messages ul {
            padding: 0;
            list-style-type: none;
        }

        .error-messages ul li {
            margin-bottom: 5px;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Styling untuk pop-up */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
        }

        .popup-content {
            background-color: #d4edda;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #155724;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .popup-content button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .popup-content button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- Teks di luar kanvas, di atas form login -->
    <h1 class="info-text">LOGIN UNTUK MENGELOLA BARANG ANDA</h1>

    <div class="login-container">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            
            <!-- Menampilkan pesan error jika ada -->
            @if($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
    </div>

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
