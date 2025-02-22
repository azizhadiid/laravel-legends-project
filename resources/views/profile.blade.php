@extends('templates.main-layout-penyewa')

@section('title', 'Profil')

@section('konten')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-white text-center rounded-top"
                    style="background: linear-gradient(135deg, #8B4513, #A0522D) !important; min-height: 60px;">
                    <h3 class="mb-0 mt-1">Profile Information</h3>
                </div>
                <div class="card-body p-4">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="text-center mb-4">
                        <img src="{{ asset('img/' . ($user->profile->profile_picture ?? 'default.jpg')) }}"
                            class="rounded-circle border shadow-sm" width="120" height="120" alt="Profile Picture">
                    </div>

                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control bg-light" value="{{ $user->nama ?? '-'}}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control bg-light" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="text" class="form-control bg-light"
                                value="{{ $user->profile->phone_number ?? '-' }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Address</label>
                            <textarea class="form-control bg-light" rows="2"
                                readonly>{{ $user->profile->address ?? '-' }}</textarea>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('profile.edit') }}" class="btn btn-warning px-4">
                                <i class="bi bi-pencil-square me-2"></i>Edit Profile
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
