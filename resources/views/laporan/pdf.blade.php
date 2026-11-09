<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Portfolio Project</title>

    <style>
        @page {
            margin: 35px 35px 55px 35px;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #333;
        }

        .header {
            text-align: center;
            border-bottom: 3px solid #0d6efd;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #0d6efd;
            margin: 0;
            font-size: 19px;
        }

        .header p {
            margin: 4px 0;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .identity {
            width: 100%;
            margin-bottom: 15px;
        }

        .identity td {
            padding: 4px;
        }

        .summary {
            background: #e8f0ff;
            border-left: 4px solid #0d6efd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .project {
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 15px;
            page-break-inside: avoid;
        }

        .project h4 {
            color: #0d6efd;
            font-size: 14px;
            margin: 0 0 10px;
        }

        .project table {
            width: 100%;
        }

        .project td {
            padding: 4px;
            vertical-align: top;
        }

        .project-image {
            max-width: 180px;
            max-height: 110px;
            margin-bottom: 8px;
        }

        .label {
            width: 95px;
            font-weight: bold;
        }

        .status {
            color: #198754;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            color: #777;
            font-size: 9px;
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>UNIVERSITAS PAMULANG</h2>
        <p>PROGRAM STUDI SISTEM INFORMASI</p>
        <p>LAPORAN REKAYASA WEB</p>
    </div>

    <div class="title">
        <h3>LAPORAN PORTFOLIO PROJECT</h3>
        <p>Dokumentasi Project dan Hasil Karya Pengembangan Web</p>
    </div>

    <div class="summary">
        <strong>Total Project:</strong>
        {{ $totalProject }} Project
    </div>

    @forelse ($projects as $index => $project)

        <div class="project">

            <h4>{{ $index + 1 }}. {{ $project->title }}</h4>

            @if ($project->image && file_exists(public_path('storage/' . $project->image)))
                <img
                    class="project-image"
                    src="{{ public_path('storage/' . $project->image) }}"
                >
            @endif

            <table>
                <tr>
                    <td class="label">Status</td>
                    <td>:</td>
                    <td class="status">{{ $project->status }}</td>
                </tr>

                <tr>
                    <td class="label">Deskripsi</td>
                    <td>:</td>
                    <td>{{ $project->description ?: 'Tidak ada deskripsi.' }}</td>
                </tr>

                <tr>
                    <td class="label">Teknologi</td>
                    <td>:</td>
                    <td>{{ $project->teknologi ?: '-' }}</td>
                </tr>
            </table>

        </div>

    @empty

        <p>Belum terdapat data project.</p>

    @endforelse

    <div class="footer">
        Universitas Pamulang - Laporan Portfolio Project
    </div>

</body>
</html>