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
                    alt="Profile" class="rounded-circle img-sm mb-3 img-thumbnail" style="width: 120px; height: 120px;">
                <h2 style="font-size: 25px; color: #B67352; font-weight: 800">{{ Auth::user()->nama ?? '' }}</h2>
                <h3 style="font-size: 20px; color: #B67352; font-weight: 800">{{ Auth::user()->adminProfile->department ?? '' }}</h3>
                <div class="social-links mt-2">
                    <a href="#" class="twitter" style="color: #ECB159"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook" style="color: #ECB159"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram" style="color: #ECB159"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin" style="color: #ECB159"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="col-xl-8">

        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs ">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#profile-overview" style="color: #B67352; font-weight: 800">Ringkasan</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" style="color: #B67352; font-weight: 800">Ubah
                            Profile</button>
                    </li>
                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title" style="color: #B67352; font-weight: 800">Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Nama Panjang</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->nama ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">ID Petugas</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->adminProfile->employee_id ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Departemen</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->adminProfile->department ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Negara</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->adminProfile->country ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Alamat</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->adminProfile->address ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Jenis Kelamin</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->adminProfile->gender ?? '' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label" style="color: #B67352; font-weight: 400">Email</div>
                            <div class="col-lg-9 col-md-8" style="color: #B67352; font-weight: 400">{{ Auth::user()->email ?? '' }}</div>
                        </div>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="employee_id" style="color: #B67352; font-weight: 400">ID Petugas</label>
                                <input type="text" class="form-control" name="employee_id" id="employee_id"
                                    value="{{ Auth::user()->adminProfile->employee_id ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender" style="color: #B67352; font-weight: 400">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
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
                                <label class="form-label" for="birth_date" style="color: #B67352; font-weight: 400">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control"
                                    value="{{ Auth::user()->adminProfile->birth_date ?? '-' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="department" style="color: #B67352; font-weight: 400">Departemen</label>
                                <input type="text" class="form-control" name="department" id="department"
                                    value="{{ Auth::user()->adminProfile->department ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="permissions" style="color: #B67352; font-weight: 400">Izin</label>
                                <input type="text" class="form-control" name="permissions" id="permissions"
                                    value="{{ Auth::user()->adminProfile->permissions ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="phone_number" style="color: #B67352; font-weight: 400">No Telepon</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number"
                                    value="{{ Auth::user()->adminProfile->phone_number ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="address" style="color: #B67352; font-weight: 400">Alamat</label>
                                <textarea name="address" class="form-control"
                                    id="address" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">{{ Auth::user()->adminProfile->address ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="city" style="color: #B67352; font-weight: 400">Kota</label>
                                <input type="text" class="form-control" name="city" id="city"
                                    value="{{ Auth::user()->adminProfile->city ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="state" style="color: #B67352; font-weight: 400">Provinsi</label>
                                <input type="text" class="form-control" name="state" id="state"
                                    value="{{ Auth::user()->adminProfile->state ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="country" style="color: #B67352; font-weight: 400">Negara</label>
                                <input type="text" class="form-control" name="country" id="country"
                                    value="{{ Auth::user()->adminProfile->country ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="postal_code" style="color: #B67352; font-weight: 400">Kode Pos</label>
                                <input type="text" class="form-control" name="postal_code" id="postal_code"
                                    value="{{ Auth::user()->adminProfile->postal_code ?? '' }}" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" style="color: #B67352; font-weight: 400">Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture" style="color: #B67352; font-weight: 400; background-color: #FEFBF6">
                            </div>

                            <button type="submit" class="btn update">Update Profile</button>
                        </form>
                    </div>
                </div><!-- End Bordered Tabs -->

            </div>
        </div>

    </div>
</div>
@endsection
