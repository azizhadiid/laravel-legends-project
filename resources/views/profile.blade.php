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
            <a class="navbar-brand" href="{{url('/sewa')}}">Menyewa</a>
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
                        <h3>Profile Information</h3>
                    </div>
                    <div class="card-body">
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

                        <div class="text-center mb-4">
                            <img src="{{ asset('img/' . ($user->profile->profile_picture ?? 'test.jpg')) }}" 
                             class="rounded-circle border" width="120" height="120" alt="Profile Picture">
                        </div>

                        <form>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" value="{{ $user->nama ?? '-'}}" readonly>
                            </div>
    
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                            </div>
    
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" value="{{ $user->profile->phone_number ?? '-' }}" readonly>
                            </div>
    
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="2" readonly>{{ $user->profile->address ?? '-' }}</textarea>
                            </div>
    
                            <div class="text-center mt-4">
                                <a href="{{ route('profile.edit') }}" class="btn btn-warning px-4">Edit Profile</a>
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
