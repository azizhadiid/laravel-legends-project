<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- My Style --}}
    <style>
        .logout {
            margin-right: 20px;
            background-color: #651609;
            color: #FEFBF6;
            font-weight: 600;
        }

        .logout:hover {
            background-color: #665248;
            color: #FEFBF6;
        }

        .link {
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 600;
            color: #B67352;
            transition: 0.3;
            background: #f6f9ff;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .link i {
            font-size: 16px;
            margin-right: 10px;
            color: #B67352;
        }

        .link:hover {
            color: #ECB159;
        }

        .link:hover i {
            color: #ECB159;
        }

        .update {
            background-color: #B67352;
            color: #FEFBF6;
            font-weight: 600;
        }

        .update:hover {
            background-color: #6d5447;
            color: #FEFBF6;
        }

        .button-container {
            display: flex;
            gap: 10px;
            /* Adjust the gap value to control the space between the buttons */
        }

        .button {
            width: 100px;
            /* Set the desired width */
            flex: 1;
            /* Make the buttons flexible to take up equal space */
            text-align: center;
            /* Center the text inside the buttons */
        }

        .tambah {
            background-color: #9d4d25;
            color: #FEFBF6;
            font-weight: 600;
        }

        .tambah:hover {
            background-color: #70391d;
            color: #FEFBF6;
            font-weight: 600;
        }

    </style>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #FEFBF6">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #FEFBF6">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block" style="color: #B67352">LegendsRoom</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn" style="color: #B67352"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="">
                    <a href="{{url('/logout')}}" class="btn btn-outline logout">Logout</a>
                </li>
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar" style="background-color: #FEFBF6">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="link collapsed link" href="{{url('/admin/dashboard')}}" style="background-color: #FEFBF6">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="link collapsed" href="{{url('/admin/profile')}}" style="background-color: #FEFBF6">
                    <i class="bi bi-person-circle"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="link collapsed" href="{{url('/admin/sewa')}}" style="background-color: #FEFBF6">
                    <i class="bi-person-bounding-box"></i>
                    <span>Penyewa Ruangan</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="link collapsed" href="{{url('/admin/ruangan')}}" style="background-color: #FEFBF6">
                    <i class="bi-building"></i>
                    <span>Ruangan</span>
                </a>
            </li><!-- End Dashboard Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main" style="background-color: #FEFBF6">

        <div class="pagetitle">
            <h1 class="mb-3" style="color: #B67352">@yield('subtitle')</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            @yield('konten')
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="background-color: #FEFBF6">
        <div class="copyright" style="color: #603F26">
            &copy; Copyright <strong><span>Legends Room</span></strong>. All Rights Reserved
        </div>
        <div class="credits" style="color: #603F26">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://laravellegends.com/">LaravelLegends</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #603F26"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- CDN Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- JS khusus Admin --}}
    <script src="{{ asset('js/main-layout-admin.js') }}"></script>

</body>

</html>
