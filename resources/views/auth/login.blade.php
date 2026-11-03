@extends('layouts.app')

@section('title', 'Login - UNPAM')

@section('content')

<style>
    .login-wrapper {
        min-height: 65vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 25px 15px;
    }

    .login-card {
        width: 100%;
        max-width: 430px;
        background: #ffffff;
        padding: 38px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border-top: 5px solid #0d6efd;
    }

    .login-logo {
        width: 65px;
        height: 65px;
        background: #e7f0ff;
        color: #0d6efd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 18px;
        font-size: 30px;
        font-weight: bold;
    }

    .login-card h2 {
        text-align: center;
        color: #0d6efd;
        margin-bottom: 8px;
        font-size: 27px;
    }

    .subtitle {
        text-align: center;
        color: #777;
        font-size: 14px;
        margin-bottom: 28px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        font-size: 14px;
        color: #333;
    }

    .form-group input[type="email"],
    .form-group input[type="password"] {
        width: 100%;
        padding: 13px;
        border: 1px solid #ddd;
        border-radius: 7px;
        outline: none;
        font-size: 14px;
        transition: .2s;
    }

    .form-group input:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13,110,253,0.12);
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #555;
        margin-bottom: 22px;
    }

    .login-button {
        width: 100%;
        padding: 13px;
        background: #0d6efd;
        color: white;
        border: none;
        border-radius: 7px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: .2s;
    }

    .login-button:hover {
        background: #0b5ed7;
    }

    .login-error {
        background: #f8d7da;
        color: #842029;
        padding: 12px;
        border-radius: 7px;
        margin-bottom: 18px;
        font-size: 14px;
    }

    .login-success {
        background: #d1e7dd;
        color: #0f5132;
        padding: 12px;
        border-radius: 7px;
        margin-bottom: 18px;
        font-size: 14px;
    }

    .login-footer {
        text-align: center;
        color: #888;
        font-size: 12px;
        margin-top: 25px;
    }

    @media (max-width: 480px) {
        .login-card {
            padding: 27px 22px;
        }
    }
</style>

<div class="login-wrapper">

    <div class="login-card">

        <h2>Selamat Datang</h2>

        <p class="subtitle">
            UNPAM - Program Studi Sistem Informasi
        </p>

        @if (session('success'))
            <div class="login-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="login-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <label class="remember">
                <input type="checkbox" name="remember" value="1">
                Ingat saya
            </label>

            <button type="submit" class="login-button">
                Login
            </button>

        </form>

        <div class="login-footer">

    </div>

</div>

@endsection
