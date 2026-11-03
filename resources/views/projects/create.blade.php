<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Project</title>
    <style>
        body{font-family:Arial;background:#f5f5f5;padding:25px;color:#222}
        .form-box{max-width:650px;margin:20px auto;background:white;padding:25px;border-radius:10px}
        label{display:block;margin-top:15px;font-weight:bold}
        input,textarea,select{width:100%;padding:10px;margin-top:7px;border:1px solid #ccc;border-radius:5px}
        button,.btn{display:inline-block;margin-top:20px;padding:11px 16px;background:#0d6efd;color:white;border:0;border-radius:5px;text-decoration:none;cursor:pointer}
        .error{color:#dc3545;font-size:13px}
    </style>
</head>
<body>
<div class="form-box">
    <h1>Tambah Project</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Project</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Deskripsi</label>
        <textarea name="description" rows="4">{{ old('description') }}</textarea>

        <label>Teknologi</label>
        <input type="text" name="teknologi" value="{{ old('teknologi') }}">

        <label>Status</label>
        <select name="status" required>
            <option value="Selesai" @selected(old('status', 'Selesai') === 'Selesai')>Selesai</option>
            <option value="In Progress" @selected(old('status') === 'In Progress')>In Progress</option>
        </select>

        <label>Gambar (JPG, PNG, WEBP; maksimal 2 MB)</label>
        <input type="file" name="image" accept=".jpg,.jpeg,.png,.webp">

        <button type="submit">Simpan Project</button>
        <a class="btn" href="{{ route('projects.index') }}">Kembali</a>
    </form>
</div>
</body>
</html>
