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
            <h3>Admin Profile</h3>
            {{-- Kalau error --}}
            @if ($errors->any())
            <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    <div>
                        @foreach ($errors->all() as $error)
                        <p class="m-0">{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- Alert Sukses --}}
            @if (session('success'))
            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card p-4">
                <div class="text-center">
                    <img src="{{ asset('img/' . (Auth::user()->adminProfile->profile_picture ?? 'test.jpg')) }}"
                        class="rounded-circle border" width="120" height="120" alt="Profile Picture">
                </div>

                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="employee_id">ID Petugas</label>
                        <input type="text" class="form-control" name="employee_id" id="employee_id"
                            value="{{ Auth::user()->adminProfile->employee_id ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ Auth::user()->adminProfile->nama ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="male"
                                {{ (Auth::user()->adminProfile->gender ?? '') == 'male' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="female"
                                {{ (Auth::user()->adminProfile->gender ?? '') == 'female' ? 'selected' : '' }}>Perempuan
                            </option>
                            <option value="other"
                                {{ (Auth::user()->adminProfile->gender ?? '') == 'other' ? 'selected' : '' }}>Lainnya
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="birth_date">Tanggal Lahir</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control"
                            value="{{ Auth::user()->adminProfile->birth_date ?? '-' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="department">Departemen</label>
                        <input type="text" class="form-control" name="department" id="department"
                            value="{{ Auth::user()->adminProfile->department ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="permissions">Izin</label>
                        <input type="text" class="form-control" name="permissions" id="permissions"
                            value="{{ Auth::user()->adminProfile->permissions ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="phone_number">No Telepon</label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                            value="{{ Auth::user()->adminProfile->phone_number ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="address">Alamat</label>
                        <textarea name="address" class="form-control"
                            id="address">{{ Auth::user()->adminProfile->address ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="city">Kota</label>
                        <input type="text" class="form-control" name="city" id="city"
                            value="{{ Auth::user()->adminProfile->city ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="state">Provinsi</label>
                        <input type="text" class="form-control" name="state" id="state"
                            value="{{ Auth::user()->adminProfile->state ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="country">Negara</label>
                        <input type="text" class="form-control" name="country" id="country"
                            value="{{ Auth::user()->adminProfile->country ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="postal_code">Kode Pos</label>
                        <input type="text" class="form-control" name="postal_code" id="postal_code"
                            value="{{ Auth::user()->adminProfile->postal_code ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="profile_picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/profile-admin.js') }}"></script>
</body>

</html>
