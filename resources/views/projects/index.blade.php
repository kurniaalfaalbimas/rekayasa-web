<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Project | UNPAM</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #222;
        }

        .navbar {
            background: #0d6efd;
            padding: 16px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .brand {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .container {
            max-width: 1200px;
            margin: 35px auto;
            padding: 0 24px;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .page-heading h1 {
            font-size: 30px;
            margin: 0 0 8px;
        }

        .page-heading p {
            color: #777;
            font-size: 14px;
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .toolbar-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 10px 14px;
            border: 0;
            border-radius: 5px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            font-size: 13px;
            cursor: pointer;
        }

        .btn:hover { opacity: .85; }
        .btn-edit { background: #f0ad4e; color: #222; }
        .btn-delete { background: #dc3545; }
        .btn-pdf { background: #dc3545; }

        .notice {
            background: #d1e7dd;
            color: #0f5132;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px #00000012;
            display: flex;
            flex-direction: column;
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #eee;
        }

        .card-content {
            padding: 18px 20px 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .status {
            align-self: flex-start;
            margin-bottom: 10px;
            padding: 5px 9px;
            border-radius: 4px;
            font-size: 12px;
            background: #0d6efd;
            color: white;
        }

        .card h2 {
            font-size: 21px;
            line-height: 1.35;
            margin: 0 0 12px;
        }

        .card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .teknologi {
            font-size: 13px;
            font-weight: bold;
            margin-top: auto;
            padding-top: 13px;
            border-top: 1px solid #eee;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 16px;
        }

        .actions form { margin: 0; }

        .empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 45px 20px;
            background: white;
            border-radius: 8px;
            color: #777;
        }

        footer {
            text-align: center;
            padding: 18px;
            margin-top: 260px;
            background: white;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }

        @media (max-width: 900px) {
            .projects { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .navbar { padding: 16px 24px; }
        }

        @media (max-width: 600px) {
            .projects { grid-template-columns: 1fr; }
            .container { padding: 0 16px; }
            .navbar { padding: 16px 20px; }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <a href="{{ url('/') }}" class="brand">UNPAM - Prodi SI</a>

    <div class="menu">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/profile') }}">Profile</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ route('projects.index') }}">Project</a>
        <a href="{{ url('/admin') }}">Admin</a>
    </div>
</nav>

<main class="container">

    <div class="page-heading">
        <h1>Portfolio Project</h1>
        <p>Dokumentasi project dan hasil karya pengembangan web.</p>
    </div>

    @if (session('success'))
        <div class="notice">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="notice" style="background:#f8d7da;color:#842029">
            Periksa kembali data yang dimasukkan.
        </div>
    @endif

    <div class="toolbar">

        <span>Total project: {{ $projects->count() }}</span>

        <div class="toolbar-actions">

            <a href="{{ route('laporan.pdf') }}"
               target="_blank"
               class="btn btn-pdf">
                Cetak PDF
            </a>

            <a href="{{ route('projects.create') }}" class="btn">
                + Tambah Project
            </a>

        </div>
    </div>

    <div class="projects">

        @forelse ($projects as $project)

            <article class="card">

                @if ($project->image)
                    <img
                        class="project-image"
                        src="{{ asset('storage/' . $project->image) }}"
                        alt="{{ $project->title }}"
                        onerror="this.style.display='none'"
                    >
                @else
                    <div class="project-image"
                         style="display:flex;align-items:center;justify-content:center;color:#777;">
                        Belum ada gambar
                    </div>
                @endif

                <div class="card-content">

                    <span class="status">{{ $project->status }}</span>

                    <h2>{{ $project->title }}</h2>

                    <p>{{ $project->description ?: 'Tidak ada deskripsi.' }}</p>

                    <div class="teknologi">
                        Teknologi: {{ $project->teknologi ?: '-' }}
                    </div>

                    <div class="actions">

                        <a href="{{ route('projects.edit', $project) }}"
                           class="btn btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('projects.destroy', $project) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus project ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-delete">
                                Hapus
                            </button>

                        </form>

                    </div>
                </div>

            </article>

        @empty

            <div class="empty">
                <h3>Belum ada project</h3>
                <p>Silakan tambahkan project pertama lu.</p>

                <a href="{{ route('projects.create') }}" class="btn">
                    + Tambah Project
                </a>
            </div>

        @endforelse

    </div>

</main>

<footer>© 2026 Universitas Pamulang</footer>

</body>
</html>