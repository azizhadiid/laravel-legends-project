<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="{{ asset('img/favicon2.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font awasome --}}
    <script src="https://kit.fontawesome.com/3659f450a4.js" crossorigin="anonymous"></script>

    {{-- My Style --}}
    <style>
        .login {
            background-color: #603F26;
            color: #FEFBF6;
            font-weight: 600
        }

        .login:hover {
            background-color: #3e2411;
            color: #FEFBF6;
        }
    </style>
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100" style="background-color: #FEFBF6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm" style="background-color: #FFEAC5">
                    <div class="card-body">
                        <div class="text-center">
                            <!-- Tambahkan logo di atas -->
                            <img src="{{ asset('img/apple-touch-icon2.png') }}" alt="Logo" width="80" height="80" class="mb-3">
                        </div>                        
                        <h4 class="text-center mb-4" style="color: #603F26">Reset Password</h4>
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

                        <p class="text-center text-muted" style="color: #6C4E31">Enter your email address and we will send you a link to reset
                            your password.</p>
                        <form method="POST" action="/reset-password">
                            @csrf
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: #6C4E31">Email<span
                                                class="text-danger">*</span></label>
                                <input id="email" type="email" name="email" class="form-control" required style="color: #6C4E31">
                                <div class="text-danger small"></div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: #6C4E31">Password<span
                                                class="text-danger">*</span></label>
                                <input id="password" type="password" name="password" class="form-control" required style="color: #6C4E31">
                                <div class="text-danger small"></div>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label" style="color: #6C4E31">Password Confirmation<span
                                                class="text-danger">*</span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="form-control" required style="color: #6C4E31">
                                <div class="text-danger small"></div>
                            </div>

                            <div class="mb-3">
                                <input id="token" type="hidden" name="token" class="form-control"
                                    value="{{ request()->route('token') }}">
                                <div class="text-danger small"></div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{url('login')}}" class="link-secondary text-decoration-underline">Back to Login</a>
                                <button type="submit" class="btn login">Recovery Account <i class="fa-solid fa-right-from-bracket"></i></button>
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
