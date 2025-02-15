<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Login</h4>
                        {{-- Jika Error --}}
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

                        {{-- Jika Sukses Login --}}
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        {{-- jika Password telah di ubah --}}
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="/login">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" required
                                    autofocus>
                                <!-- Error message for email -->
                                <div class="text-danger small"></div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" class="form-control" required>
                                <!-- Error message for password -->
                                <div class="text-danger small"></div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{url('forgot-password')}}" class="text-decoration-none small">Forgot your
                                    password?</a>
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <span class="small">Don't have an account? <a href="{{url('register')}}"
                                    class="text-decoration-none">Register here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
