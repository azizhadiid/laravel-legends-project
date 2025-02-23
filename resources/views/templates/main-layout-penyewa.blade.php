<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon2.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/teams/team-2/assets/css/team-2.css">

    {{-- Font awasome --}}
    <script src="https://kit.fontawesome.com/3659f450a4.js" crossorigin="anonymous"></script>

    {{-- My Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:wght@400;500;600&family=Julius+Sans+One&family=Open+Sans:wght@400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .login {
            background-color: #3e2411;
            color: #FEFBF6;
            font-weight: 600;
            padding-right: 10px
        }

        .login:hover {
            background-color: #291506;
            color: #FEFBF6;
        }

        .logout {
            background-color: #63150a;
            color: #FEFBF6;
            font-weight: 600;
            padding-right: 10px
        }

        .logout:hover {
            background-color: #3d0f05;
            color: #FEFBF6;
        }

        .link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .link:hover {
            color: #C69C6D;
        }

        .logo-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            padding: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-right: 5px
        }

        .title-logo {
            font-size: 24px;
            font-weight: 700;
            color: #DEB887;
            font-family: 'Poppins', sans-serif;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            background: url("{{ asset('img/ruang.jpg') }}") no-repeat center center/cover;
            position: relative;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(96, 63, 38, 0.75);
        }

        .hero .content {
            position: relative;
            background: rgba(255, 255, 255, 0.15);
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 700;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
        }

        .hero p {
            font-size: 20px;
            margin: 10px 0 25px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .btn-booking {
            display: inline-block;
            padding: 12px 28px;
            background-color: #DEB887;
            color: #603F26;
            text-decoration: none;
            font-weight: 600;
            border-radius: 6px;
            transition: 0.3s ease-in-out;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-booking:hover {
            background-color: #C69C6D;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
        }

        .back {
            display: inline-block;
            padding: 12px 28px;
            background-color: #665e52;
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            border-radius: 6px;
            transition: 0.3s ease-in-out;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .back:hover {
            background-color: #645749;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
        }

    </style>

</head>

<body style="background-color: #FEFBF6; padding-top: 60px;">
    {{-- navigasi --}}
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #603F26; z-index: 1030;">
        <div class="container p-2">
            <div class="d-flex align-items-center justify-content-between flex-nowrap gap-2">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-circle">
                <h1 class="fs-4 m-0 title-logo">Legends Room</h1>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #FEFBF6"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link link mt-2 mt-md-0" href="{{url('/home')}}">Home</a>
                    <a class="nav-link link" href="{{url('/ruangan')}}">Ruangan</a>
                    <a class="nav-link link" href="{{url('/sewa')}}">Sewa</a>
                    <a class="nav-link link" href="{{url('/history')}}">Riwayat</a>
                    <a class="nav-link mb-3 mb-md-0 link" href="{{url('/profile')}}" style="margin-right: 5px">Profil</a>
                    <a class="nav-link btn logout" href="{{url('/logout')}}"><i class="fa-solid fa-right-from-bracket"></i>
                        Logout</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('konten')

    {{-- Footer --}}
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #612f0b" id="kontak">
        <!-- Section: Links  -->
        <section class="p-2">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Legend Room</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Kami menyediakan ruang premium untuk pertemuan, konferensi, dan berbagai acara. Legend Room
                            berkomitmen untuk memberikan layanan yang luar biasa guna meningkatkan produktivitas dan
                            kesuksesan Anda.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Layanan Kami</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Sewa Ruang Meeting</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Sewa Ruang Konferensi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Paket Acara</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Layanan Catering</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Tautan Berguna</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Akun Anda</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Menjadi Afiliasi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Tarif Pengiriman</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Bantuan</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Kontak</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Jambi, Indonesia</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@legendroom.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 812 3456 7890</p>
                        <p><i class="fas fa-print mr-3"></i> +62 812 3456 7891</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2025 Copyright:
            <a class="text-white" href="https://laravellegends.com/">laravellegends.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    {{-- JS Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- CDN Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     {{-- JS khusus User --}}
     <script src="{{ asset('js/main-layout-user.js') }}"></script>

</body>

</html>
