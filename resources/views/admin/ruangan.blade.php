<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px;
            width: 100%;
            padding: 20px;
        }

        .topbar {
            background: #f8f9fa;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logout {
            background: #dc3545;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout:hover {
            background: #c82333;
        }

    </style>
</head>

<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/ruangan">Ruangan</a>
        <a href="#">Settings</a>
        <a href="/admin/profile">Profile</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <div class="topbar">
            <h5>Welcome, Admin</h5>
            <a href="{{url('/logout')}}" class="logout">Logout</a>
        </div>
        <div class="container mt-4">
            <!-- Flash Message -->
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <a href="{{ route('ruangan.create') }}" class="btn btn-primary mb-3">Tambah Ruangan</a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Ruangan</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Rating</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ruangan as $r)
                    <tr>
                        <td>{{ $r->nama_ruangan }}</td>
                        <td>{{ $r->deskripsi }}</td>
                        <td>{{ $r->category }}</td>
                        <td>{{ $r->rating }}</td>
                        <td>{{ $r->location }}</td>
                        <td>{{ $r->harga }}</td>
                        <td>
                            @if($r->gambar)
                            <img src="{{ asset('img/ruangan/' . $r->gambar) }}" alt="Foto Ruangan" width="100">
                            @else
                            Tidak ada foto
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('ruangan.edit', $r->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('ruangan.destroy', $r->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/ruanganAdmin.js') }}"></script>
</body>

</html>
