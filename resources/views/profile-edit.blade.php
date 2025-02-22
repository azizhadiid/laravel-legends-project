@extends('templates.main-layout-penyewa')

@section('title', 'Profil Edit')

@section('konten')
<style>
    .form-control {
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #A0522D;
        box-shadow: 0 0 10px rgba(160, 82, 45, 0.3);
    }

    .btn {
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        opacity: 0.85;
    }

</style>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-white text-center rounded-top"
                    style="background: linear-gradient(135deg, #8B4513, #A0522D);">
                    <h3 class="mb-0">Edit Profile</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            <div>
                                @foreach ($errors->all() as $error)
                                <p class="m-0">{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Telepon</label>
                            <input type="text" name="phone_number" class="form-control shadow-sm"
                                value="{{ $user->profile->phone_number ?? '-' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Kelamin</label>
                            <select name="gender" class="form-control shadow-sm">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="male" {{ ($user->profile->gender ?? '') == 'male' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="female"
                                    {{ ($user->profile->gender ?? '') == 'female' ? 'selected' : '' }}>Perempuan
                                </option>
                                <option value="other" {{ ($user->profile->gender ?? '') == 'other' ? 'selected' : '' }}>
                                    Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" name="birth_date" class="form-control shadow-sm"
                                value="{{ $user->profile->birth_date ?? '-' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat</label>
                            <textarea name="address"
                                class="form-control shadow-sm">{{ $user->profile->address ?? '' }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Kota</label>
                                <input type="text" name="city" class="form-control shadow-sm"
                                    value="{{ $user->profile->city ?? '-' }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Provinsi</label>
                                <input type="text" name="state" class="form-control shadow-sm"
                                    value="{{ $user->profile->state ?? '-' }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Negara</label>
                                <input type="text" name="country" class="form-control shadow-sm"
                                    value="{{ $user->profile->country ?? '-' }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Kode Pos</label>
                                <input type="text" name="postal_code" class="form-control shadow-sm"
                                    value="{{ $user->profile->postal_code ?? '-' }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Foto Profil</label>
                            <input type="file" name="profile_picture" class="form-control shadow-sm">
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success px-4 rounded-pill fw-bold">Save
                                Changes</button>
                            <a href="{{ route('profile.show') }}"
                                class="btn btn-secondary px-4 rounded-pill fw-bold">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
