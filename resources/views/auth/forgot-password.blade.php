<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Forgot Password</h4>
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

                        {{-- Jika Sukses Reset --}}
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p class="text-center text-muted">Enter your email address and we will send you a link to reset
                            your password.</p>
                        <form method="POST" action="/forgot-password">
                            @csrf
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                                <div class="text-danger small"></div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{url('login')}}" class="text-decoration-none small">Back to Login</a>
                                <button type="submit" class="btn btn-primary">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
