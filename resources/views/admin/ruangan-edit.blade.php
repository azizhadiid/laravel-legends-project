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
            <h2>Edit Ruangan</h2>

            <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan"
                        value="{{ $ruangan->nama_ruangan }}" required>
                </div>

                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                        value="{{ $ruangan->kapasitas }}" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category"
                        value="{{ $ruangan->category }}" required>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="rating" name="rating"
                        value="{{ $ruangan->rating }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="location" name="location"
                        value="{{ $ruangan->location }}" required>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga"
                        value="{{ $ruangan->harga }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"
                        rows="3">{{ $ruangan->deskripsi }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="foto_ruangan" class="form-label">Foto Ruangan</label>
                    <input type="file" class="form-control" id="foto_ruangan" name="foto_ruangan">
                    @if($ruangan->foto_ruangan)
                    <img src="{{ asset('storage/' . $ruangan->foto_ruangan) }}" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/ruanganAdmin.js') }}"></script>
</body>

</html>
