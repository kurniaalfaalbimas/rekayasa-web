<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Portfolio Project</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #212529;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR BIRU */
        .navbar {
            background: #0d6efd;
            color: white;
            padding: 15px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .brand {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .back-link,
        .logout-button {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 10px 16px;
            border: 1px solid rgba(255,255,255,.6);
            border-radius: 7px;
            transition: .2s;
            cursor: pointer;
        }

        .back-link:hover {
            background: #0b5ed7;
        }

        .logout-button {
            background: #dc3545;
            border-color: #dc3545;
        }

        .logout-button:hover {
            background: #bb2d3b;
        }

        /* KONTEN */
        .container {
            width: min(100% - 40px, 1080px);
            margin: 40px auto;
            flex: 1;
        }

        .welcome {
            background: white;
            padding: 32px;
            border-radius: 14px;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
            border-left: 5px solid #0d6efd;
            margin-bottom: 26px;
        }

        .welcome h1 {
            font-size: 30px;
            color: #0d6efd;
            margin-bottom: 12px;
        }

        .welcome p {
            color: #6c757d;
            font-size: 15px;
            line-height: 1.7;
        }

        /* KARTU DASHBOARD */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
            border: 1px solid #edf0f3;
            display: flex;
            flex-direction: column;
            min-height: 220px;
            transition: .2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 7px 18px rgba(0,0,0,.09);
        }

        .icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: #e8f1ff;
            color: #0d6efd;
            font-size: 22px;
            margin-bottom: 18px;
        }

        .card h2 {
            font-size: 19px;
            margin-bottom: 10px;
        }

        .card p {
            color: #6c757d;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 22px;
        }

        /* TOMBOL */
        .button {
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
            padding: 11px 14px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            margin-top: auto;
            border: 1px solid #0d6efd;
            color: #0d6efd;
            transition: .2s;
        }

        .button:hover {
            background: #0d6efd;
            color: white;
        }

        /* FOOTER */
        footer {
            text-align: center;
            color: #6c757d;
            font-size: 13px;
            padding: 22px 15px;
            border-top: 1px solid #e1e5e9;
            background: white;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .container {
                margin-top: 28px;
            }
        }

        @media (max-width: 520px) {
            .navbar {
                padding: 15px 20px;
            }

            .brand {
                font-size: 17px;
            }

            .nav-actions {
                width: 100%;
            }

            .back-link,
            .logout-button {
                font-size: 12px;
                padding: 9px 11px;
            }

            .container {
                width: calc(100% - 28px);
                margin: 22px auto;
            }

            .welcome {
                padding: 23px;
            }

            .welcome h1 {
                font-size: 25px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .card {
                min-height: 200px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <a href="{{ url('/') }}" class="brand">
            UNPAM - Prodi SI
        </a>

        <div class="nav-actions">

            <a href="{{ url('/') }}" class="back-link">
                Kembali ke Home
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-button">
                    Logout
                </button>
            </form>

        </div>

    </nav>

    <!-- KONTEN UTAMA -->
    <main class="container">

        <section class="welcome">

            <h1>Admin Dashboard</h1>

            <p>
                Selamat datang di panel administrator portofolio.
            </p>

            <p>
                Kelola dan lihat informasi project, profil,
                serta tentang aplikasi melalui menu di bawah.
            </p>

        </section>

        <!-- KARTU DASHBOARD -->
        <section class="dashboard-grid">

            <article class="card">

                <div class="icon">▤</div>

                <h2>Total Project</h2>

                <p>
                    Daftar project portofolio dan dokumentasi
                    hasil pengerjaan.
                </p>

                <a href="{{ url('/projects') }}" class="button">
                    Lihat Project →
                </a>

            </article>

            <article class="card">

                <div class="icon">♙</div>

                <h2>Profile</h2>

                <p>
                    Lihat informasi pemilik portofolio
                    dan profil mahasiswa.
                </p>

                <a href="{{ url('/profile') }}" class="button">
                    Lihat Profile →
                </a>

            </article>

            <article class="card">

                <div class="icon">ⓘ</div>

                <h2>About</h2>

                <p>
                    Informasi mengenai aplikasi dan tujuan
                    project Rekayasa Web.
                </p>

                <a href="{{ url('/about') }}" class="button">
                    Lihat About →
                </a>

            </article>

        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        © 2026 Universitas Pamulang · Portfolio Project
    </footer>

</body>
</html>
