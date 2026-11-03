@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="about-container">

    <h1>Tentang Aplikasi</h1>

    <p>
        Aplikasi ini adalah project latihan mata kuliah Rekayasa Web.
    </p>

</div>

<style>

    .about-container {
        width: 100%;
        padding: 10px 30px;
    }

    .about-container h1 {
        color: #0d6efd;
        font-size: 30px;
        font-weight: 400;
        margin: 0 0 8px 0;
    }

    .about-container p {
        color: #777;
        font-size: 13px;
        margin: 0;
    }

</style>

@endsection