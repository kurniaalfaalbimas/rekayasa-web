<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f2f2f2;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 500px;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .foto {
            width: 120px;
            height: 120px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            margin-bottom: 10px;
        }

        .status {
            color: #666;
            margin-bottom: 25px;
        }

        .data {
            text-align: left;
            line-height: 2;
        }

        .data strong {
            display: inline-block;
            width: 130px;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="foto">
            <img src="{{ asset('images/foto.jpg') }}" alt="Foto Mahasiswa">
        </div>

        <h1>Profil Mahasiswa</h1>

        <p class="status"></p>

        <div class="data">
            <p><strong>NIM :</strong> 251011700955</p>
            <p><strong>Nama :</strong> Kurnia Alfa Albimas</p>
            <p><strong>Program Studi :</strong> Sistem Informasi</p>
            <p><strong>Fakultas :</strong> Ilmu Komputer</p>
            <p><strong>Semester :</strong> 3</p>
            <p><strong>Email :</strong> alfaalbimas@gmail.com</p>
        </div>

    </div>

</body>
</html>