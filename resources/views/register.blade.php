<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>

    <!-- Menghubungkan CSS -->
    <link rel="stylesheet" href="register-style.css">
</head>
<body>

    <!-- Halaman Register -->

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
      <a href="home" class="logo d-flex align-items-center">
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
     
    <div class="register-container">
    <form action="{{route('register.post')}}" method="POST" class="ms-auto me=auto mt-auto" style="width: 350px">
        @csrf
        <h2>Buat Akun Baru</h2>
        <form>
            <label>Name:</label>
            <input type="text" id="name" name="name"><br><br>

            <label>Email:</label>
            <input type="text" id="email" name="email"><br><br>

            <label>Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="#">Masuk sekarang</a></p>
    </div>

</body>
</html>
