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
            <h3>Upload Ruangan</h3>
            <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kapasitas</label>
                    <input type="number" name="kapasitas" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Kategori</label>
                    <input type="text" name="category"  id="category" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rating">Rating</label>
                    <input type="number" name="rating"  id="rating" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="location">Lokasi</label>
                    <input type="text" name="location"  id="location" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">Harga</label>
                    <input type="number" name="harga"  id="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>

    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/ruanganAdmin.js') }}"></script>
</body>

</html>
