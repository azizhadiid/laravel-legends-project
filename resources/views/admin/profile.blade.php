@extends('admin.templates.main-layout-admin')

@section('title', 'Profile')

@section('subtitle', 'Profile')

@section('konten')
<div class="row">
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

    <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('img/' . (Auth::user()->adminProfile->profile_picture ?? 'test.jpg')) }}"
                    alt="Profile" class="rounded-circle img-sm mb-3" style="width: 120px; height: 120px;">
                <h2 style="font-size: 25px">{{ Auth::user()->nama ?? '' }}</h2>
                <h3 style="font-size: 20px">{{ Auth::user()->adminProfile->department ?? '' }}</h3>
                <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="col-xl-8">

        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#profile-overview">Ringkasan</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah
                            Profile</button>
                    </li>
                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama Panjang</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->nama ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">ID Petugas</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->adminProfile->employee_id ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Departemen</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->adminProfile->department ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Negara</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->adminProfile->country ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Alamat</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->adminProfile->address ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->adminProfile->gender ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ Auth::user()->email ?? '' }}</div>
                        </div>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="employee_id">ID Petugas</label>
                                <input type="text" class="form-control" name="employee_id" id="employee_id"
                                    value="{{ Auth::user()->adminProfile->employee_id ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="male"
                                        {{ (Auth::user()->adminProfile->gender ?? '') == 'male' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="female"
                                        {{ (Auth::user()->adminProfile->gender ?? '') == 'female' ? 'selected' : '' }}>
                                        Perempuan</option>
                                    <option value="other"
                                        {{ (Auth::user()->adminProfile->gender ?? '') == 'other' ? 'selected' : '' }}>
                                        Lainnya</option>
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
                </div><!-- End Bordered Tabs -->

            </div>
        </div>

    </div>
</div>
@endsection
