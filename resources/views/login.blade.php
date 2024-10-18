@extends('layout')
@section('title','Halaman Login')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    
    <!-- Menghubungkan CSS -->
    <link rel="stylesheet" href="login-style.css">
</head>
<body>

    <!-- Halaman Login -->
    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>                                {{$error}}
                        @endforeach
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            
        </div>
        <h1 class="sitename">Novi Salon</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home" class="active">Home</a></li>
          <li><a href="review">Review</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="register">Register</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
    <div class="login-container">
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me=auto mt-auto" style="width: 250px">
            @csrf
        <h2>Masuk ke Akun Anda</h2>
        <form action="login" method="POST">
        <form>
            <label>Email:</label>
            <input type="text" id="email" name="email"><br><br>
            <label>Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Masuk</button>
        </form>
        <p><a href="#">Lupa Password</a></p>
        <p>Belum memiliki akun? <a href="#">Daftar sekarang</a></p>
    </div>

</body>
</html>

@endsection
