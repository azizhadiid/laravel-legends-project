<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon2.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">

    <style>
        .background {
            background-image: url("{{ asset('img/ruangan4.jpg') }}");
            background-position: center;
            background-size: cover
        }

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

<body style="background-color: #FEFBF6">
    <!-- Login 5 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    <div class="col-12 col-md-6 background">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5" style="background-color: #FFEAC5">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-centent text-center">
                                        <img class="img-fluid mb-3" src="{{ asset('img/apple-touch-icon2.png') }}"
                                            width="80" height="80" alt="BootstrapBrain Logo">
                                        <h4 class="" style="color: #603F26">Register for an account!!</h4>

                                        @if ($errors->any())
                                        <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert" style="width: 100%">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-exclamation-circle-fill me-2"></i>
                                                <div>
                                                    @foreach ($errors->all() as $error)
                                                    <p class="m-0">{{ $error }}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                        @endif

                                        {{-- Jika Sukses Login --}}
                                        @if (session('success'))
                                        <div class="alert alert-success" style="width: 100%">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        {{-- jika Password telah di ubah --}}
                                        @if (session('status'))
                                        <div class="alert alert-success" style="width: 100%">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{url('/register/create')}}" class="mt-2">
                                @csrf
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="nama" class="form-label">Nama <span
                                                class="text-danger">*</span></label>
                                        <input type="nama" class="form-control" name="nama" id="nama"
                                            placeholder="Jhond Doe" required>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="name@example.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="" required placeholder="********">
                                    </div>

                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                            value="" required placeholder="********">
                                            
                                    </div>
                                    <hr class="border-secondary-subtle">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn login" type="submit">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="/login" class="link-secondary text-decoration-underline">Already have an account? Log in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
