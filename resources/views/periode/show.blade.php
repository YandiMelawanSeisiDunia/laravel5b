
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Periode Akademik</title>
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
                        <a href="{{ route('periode.index') }}" class="nav-link active">
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
                <h3 class="mb-3">Detail Periode Akademik</h3>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Periode</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 180px;">ID</th>
                                <td>{{ $periode->id }}</td>
                            </tr>
                            <tr>
                                <th>Periode</th>
                                <td>{{ $periode->periode }}</td>
                            </tr>
                            <tr>
                                <th>Singkatan</th>
                                <td>
                                    <span class="badge text-bg-secondary">
                                        {{ $periode->singkatan }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Dibuat</th>
                                <td>{{ $periode->created_at?->format('d-m-Y H:i') ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Diperbarui</th>
                                <td>{{ $periode->updated_at?->format('d-m-Y H:i') ?? '-' }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('periode.edit', $periode->id) }}"
                           class="btn btn-warning">Edit</a>
                        <a href="{{ route('periode.index') }}"
                           class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>
</html>