<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Periode Akademik</title>

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold">Akademik App</span>
        </div>
    </nav>

    <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <span class="brand-text fw-light">Akademik App</span>
        </div>

        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview" role="menu">

                    <li class="nav-item">
                        <a href="{{ route('periode.index') }}"
                           class="nav-link active">
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

                <div class="row mb-3">
                    <div class="col-sm-8">
                        <h3>Data Periode Akademik</h3>
                        <p class="text-secondary">
                            Kelola data periode akademik di sini.
                        </p>
                    </div>

                    <div class="col-sm-4 text-sm-end">
                        <a href="{{ route('periode.create') }}"
                           class="btn btn-primary">
                            + Tambah Periode
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close"
                                data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Periode</h3>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Periode</th>
                                    <th>Singkatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($periodes as $periode)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $periode->periode }}</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                {{ $periode->singkatan }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('periode.show', $periode->id) }}"
                                               class="btn btn-info btn-sm">
                                                Detail
                                            </a>

                                            <a href="{{ route('periode.edit', $periode->id) }}"
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('periode.destroy', $periode->id) }}"
                                                  method="POST" class="d-inline"
                                                  onsubmit="return confirm('Yakin ingin menghapus periode ini?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            Belum ada data periode.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <footer class="text-center text-secondary py-3">
                    &copy; {{ date('Y') }} Akademik App
                </footer>

            </div>
        </div>
    </main>

</div>

<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>
</html>