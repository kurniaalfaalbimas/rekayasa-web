@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="profile-container">

    <div class="profile-card">

        <div class="profile-header">

            <div class="foto">
                <img src="/images/foto.jpg" alt="Foto Profile">
            </div>

            <h3>Profile Mahasiswa</h3>

        </div>

        <div class="profile-data">

            <p>
                <strong>Nama :</strong>
                Kurnia Alfa Albimas
            </p>

            <p>
                <strong>NIM :</strong>
                251011700955
            </p>

            <p>
                <strong>Prodi :</strong>
                Sistem Informasi
            </p>

            <p>
                <strong>Email :</strong>
                alfaalbimas@gmail.com
            </p>

        </div>

    </div>

</div>

<style>

    .profile-container {
        min-height: 65vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        transform: translate(0px, 100px);
    }

    .profile-card {
        width: 500px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .profile-header {
        text-align: center;
        padding: 50px;
        border-bottom: 1px solid #ddd;
    }

    .foto {
        width: 80px;
        height: 80px;
        margin: 0 auto 15px;
        border-radius: 50%;
        overflow: hidden;
    }

    .foto img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-header h3 {
        font-size: 14px;
        font-weight: 400;
        margin: 0;
    }

    .profile-data {
        padding: 25px 30px;
        text-align: left;
    }

    .profile-data p {
        font-size: 12px;
        margin: 10px 0;
    }

    .profile-data strong {
        display: inline-block;
        width: 80px;
    }

</style>

@endsection