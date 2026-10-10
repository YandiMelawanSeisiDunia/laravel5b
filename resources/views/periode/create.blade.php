
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Periode Akademik</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <a href="{{ route('periode.index') }}" class="navbar-brand">Akademik App</a>
        </div>
    </nav>

    <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <span class="brand-text">Akademik App</span>
        </div>
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column">
                    <li class="nav-item">
                        <a href="{{ route('periode.index') }}" class="nav-link">
                            <span class="nav-icon">📚</span>
                            <p>Data Periode</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <main class="app-main">
        <div class="app-content">
            <div class="container-fluid py-4">
                <h3 class="mb-3">Tambah Periode Akademik</h3>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Periode</h3>
                    </div>

                    <form action="{{ route('periode.store') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="periode" class="form-label">Periode</label>
                                <input type="text" id="periode" name="periode"
                                    class="form-control"
                                    value="{{ old('periode') }}"
                                    placeholder="Contoh: GANJIL 2026/2027" required>
                            </div>

                            <div class="mb-3">
                                <label for="singkatan" class="form-label">Singkatan</label>
                                <input type="text" id="singkatan" name="singkatan"
                                    class="form-control"
                                    value="{{ old('singkatan') }}"
                                    placeholder="Contoh: 261" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('periode.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</div>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>
</html>
