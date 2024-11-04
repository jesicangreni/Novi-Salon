<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-style.css">
    <style>
        body {
            display: flex;
            justify-content: center; /* Menempatkan konten di tengah secara horizontal */
            align-items: center; /* Menempatkan konten di tengah secara vertikal */
            height: 100vh; /* Mengatur tinggi halaman agar 100% dari viewport */
            margin: 0;
            background-color: #f8f9fa; /* Warna latar belakang halaman */
        }
        .register-container {
            background-color: #ffffff; /* Warna latar belakang form */
            padding: 30px;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
            width: 400px; /* Lebar form */
        }
        .register-container h2 {
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
        button[type="submit"] {
            width: 100%; /* Lebar penuh */
            padding: 10px; /* Padding dalam tombol */
            background-color: #ff4081; /* Warna pink untuk tombol */
            color: white; /* Warna teks tombol */
            border: none; /* Tanpa border */
            border-radius: 4px; /* Sudut membulat pada tombol */
            cursor: pointer; /* Pointer saat hover */
            transition: background-color 0.3s; /* Transisi saat hover */
        }
        button[type="submit"]:hover {
            background-color: #e91e63; /* Warna tombol saat hover (lebih gelap) */
        }
        .alert {
            margin-bottom: 15px; /* Jarak bawah alert */
        }
    </style>
</head>
<body>

    @include('navbar')

    <div class="register-container">
        <form action="{{ route('register.post') }}" method="POST" class="register-form">
            @csrf
            <h2>Buat Akun Baru</h2>

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
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <button type="submit">Daftar</button>
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk sekarang</a></p>
        </form>
    </div>

</body>
</html>