<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <style>
        body {
            display: flex;
            justify-content: center; /* Menempatkan konten di tengah secara horizontal */
            align-items: center; /* Menempatkan konten di tengah secara vertikal */
            height: 100vh; /* Mengatur tinggi halaman agar 100% dari viewport */
            margin: 0;
            background-color: #f8f9fa; /* Warna latar belakang halaman */
        }
        .login-container {
            background-color: #ffffff; /* Warna latar belakang form */
            padding: 30px;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
            width: 400px; /* Lebar form */
        }
        .login-container h2 {
            text-align: center; /* Mengatur teks judul di tengah */
            margin-bottom: 20px; /* Jarak bawah judul */
        }
        .input-group {
            margin-bottom: 15px; /* Jarak antar input */
        }
        .input-group label {
            display: block; /* Membuat label menjadi block */
            margin-bottom: 5px; /* Jarak bawah label */
        }
        .input-group input {
            width: 100%; /* Lebar penuh */
            padding: 10px; /* Padding dalam input */
            border: 1px solid #ccc; /* Border input */
            border-radius: 4px; /* Sudut membulat pada input */
        }
        .login-btn {
            width: 100%; /* Lebar penuh */
            padding: 10px; /* Padding dalam tombol */
            background-color: #007bff; /* Warna tombol */
            color: white; /* Warna teks tombol */
            border: none; /* Tanpa border */
            border-radius: 4px; /* Sudut membulat pada tombol */
            cursor: pointer; /* Pointer saat hover */
            transition: background-color 0.3s; /* Transisi saat hover */
        }
        .login-btn:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
        }
        .alert {
            margin-bottom: 15px; /* Jarak bawah alert */
        }
    </style>
</head>
<body>

    @include('navbar')

    <div class="login-container">
        <form action="{{ route('login.post') }}" method="POST" class="login-form">
            @csrf
            <h2>Masuk ke Akun Anda</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <button type="submit" class="login-btn">Masuk</button>
            <p>Belum memiliki akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
        </form>
    </div>

</body>
</html>