@extends('layouts.app')
@section('title', 'Halaman Login')
@section('content')

<div class="card">
    <h2 class="text-center">Masuk ke Akun Anda</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>

    <div class="text-center mt-3">
        <p>Belum memiliki akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
    </div>
</div>

@endsection