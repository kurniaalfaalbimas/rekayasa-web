<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portfolio Project')</title>

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
            flex-direction: column;
        }

        /* Navbar biru seperti semula */
        .navbar {
            background: #0d6efd;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .navbar .brand {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 24px;
        }

        .menu a {
            color: #ffffff;
            text-decoration: none;
            font-size: 15px;
            transition: opacity 0.2s;
        }

        .menu a:hover,
        .menu a.active {
            color: #ffffff;
            text-decoration: underline;
        }

        .content {
            flex: 1;
            padding: 40px 15px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #ffffff;
            border-top: 1px solid #dddddd;
            font-size: 12px;
            color: #666666;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 15px 20px;
            }

            .content {
                padding: 20px;
            }

            .menu {
                gap: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">

        <a href="{{ route('home') }}" class="brand">
            UNPAM - Prodi SI
        </a>

        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('projects.index') }}">Project</a>
            <a href="{{ route('admin.dashboard') }}">Admin</a>
        </div>

    </nav>

    <!-- Isi halaman -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        © 2026 Universitas Pamulang
    </footer>

</body>

</html>
