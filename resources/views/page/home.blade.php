@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="home-container">

    <h1>Selamat Datang</h1>

    <p>
        ini adalah halaman utama project web profile prodi si unpam
    </p>

    <a href="/profile" class="btn-detail">
        Lihat Detail
    </a>

</div>

<style>

    .home-container {
        width: 100%;
        padding: 10px 30px;
    }

    .home-container h1 {
        color: #0d6efd;
        font-size: 30px;
        font-weight: 400;
        margin: 0 0 8px 0;
    }

    .home-container p {
        color: #777;
        font-size: 13px;
        margin: 0 0 15px 0;
    }

    .btn-detail {
        display: inline-block;
        background-color: #198754;
        color: white;
        text-decoration: none;
        padding: 7px 12px;
        border-radius: 4px;
        font-size: 12px;
    }

    .btn-detail:hover {
        background-color: #157347;
    }

</style>

@endsection