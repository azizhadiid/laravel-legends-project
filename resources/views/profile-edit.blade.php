<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Legends Room</a>
            <a class="navbar-brand" href="{{url('/profile')}}">Profile</a>
            <div class="d-flex">
                <a href="{{url('/logout')}}" class="btn btn-danger logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body">
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

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $user->profile->nama ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="phone_number">Nomor Telepon</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control"
                                    value="{{ $user->profile->phone_number ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="male"
                                        {{ ($user->profile->gender ?? '') == 'male' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="female"
                                        {{ ($user->profile->gender ?? '') == 'female' ? 'selected' : '' }}>Perempuan
                                    </option>
                                    <option value="other"
                                        {{ ($user->profile->gender ?? '') == 'other' ? 'selected' : '' }}>Lainnya
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control"
                                    value="{{ $user->profile->birth_date ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="address"
                                    class="form-control">{{ $user->profile->address ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="city">Kota</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    value="{{ $user->profile->city ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="state">Provinsi</label>
                                <input type="text" name="state" id="state" class="form-control"
                                    value="{{ $user->profile->state ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="country">Negara</label>
                                <input type="text" name="country" id="country" class="form-control"
                                    value="{{ $user->profile->country ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="postal_code">Kode Pos</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    value="{{ $user->profile->postal_code ?? '-' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Profile Picture</label>
                                <input type="file" name="profile_picture" class="form-control">
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success px-4">Save Changes</button>
                                <a href="{{ route('profile.show') }}" class="btn btn-secondary px-4">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/profile.js') }}"></script>
</body>

</html>
