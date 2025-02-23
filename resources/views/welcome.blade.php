<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon2.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <title>Beranda</title>
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

    </style>

</head>

<body style="background-color: #FEFBF6; padding-top: 70px;">
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
                    <a class="nav-link link mt-2 mt-md-0" href="/">Beranda</a>
                    <a class="nav-link link" href="#about">Tentnag Kami</a>
                    <a class="nav-link mb-3 mb-md-0 link" href="#kontak" style="margin-right: 10px">Kontak</a>
                    <a class="nav-link btn login" href="/login"><i class="fa-regular fa-user"></i> Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="Beranda">
        <main class="content">
            <h1>Selamat Datang di Sistem Booking Ruangan Acara</h1>
            <p>Temukan tempat terbaik untuk seminar, pesta, konferensi, dan berbagai acara spesial Anda.</p>
            <a href="/login" class="btn-booking">Pesan Sekarang</a>
        </main>
    </section>

    {{-- About Section --}}
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5" id="about">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/ruangan4.jpg') }}" alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Siapa Kami?</h2>
                            <p class="lead fs-4 text-secondary mb-3">Di Legend Room, kami menyediakan ruang premium
                                untuk pertemuan, konferensi, dan berbagai acara. Misi kami adalah menawarkan layanan
                                luar biasa yang menginspirasi kesuksesan dan produktivitas.</p>
                            <p class="mb-5">Meskipun kami adalah perusahaan yang berkembang pesat, kami tetap
                                berkomitmen pada nilai-nilai inti kami yaitu kolaborasi, inovasi, dan kepuasan
                                pelanggan. Kami terus mencari cara-cara inovatif untuk meningkatkan ruang dan layanan
                                kami guna memenuhi kebutuhan Anda dengan lebih baik.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4" style="color: rgb(229, 134, 11)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Merek Serbaguna</h2>
                                            <p class="text-secondary mb-0">Kami merancang metode digital yang
                                                menghadirkan kehidupan di berbagai media.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4" style="color: rgb(229, 134, 11)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Agensi Digital</h2>
                                            <p class="text-secondary mb-0">Kami percaya pada inovasi dengan
                                                menggabungkan ide-ide dasar dan rumit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ruangan Terbaik --}}
    <section class="mt-5" style="background-color: #A0522D;"> <!-- Warna coklat -->
        <div class="container p-2 mt-3">
            <h2 class="text-center mb-4 mt-3 text-white">Ruangan Terbaik</h2>
            <div class="row mb-4">
                @foreach($ruanganTerbaik as $ruangan)
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100 shadow-lg"> <!-- Tambah shadow untuk estetika -->
                        <img src="{{ asset('img/ruangan/' . $ruangan->gambar) }}" class="card-img-top"
                            alt="{{ $ruangan->nama_ruangan }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $ruangan->nama_ruangan }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($ruangan->deskripsi, 100) }}</p>
                            
                            <!-- Rating bintang -->
                            <p class="card-text">
                                <strong>Rating: </strong>
                                {!! str_repeat('⭐', $ruangan->rating) !!}
                            </p>

                            <p class="card-text"><strong>Harga: </strong>Rp{{ number_format($ruangan->harga, 0, ',', '.') }}</p>
                            <a href="{{ route('ruangan.user.detail', $ruangan->id) }}" class="btn btn-light mt-auto">Lihat Detail</a> <!-- Warna tombol lebih cocok -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="testimonials py-5" style="background-color: #F5F5F5;" id="testimonials">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators" style="list-style: none;">
                            <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active"
                                style="background-color: rgb(229, 134, 11)"></li>
                            <li class="" data-bs-target="#carousel1" data-bs-slide-to="1"
                                style="background-color: rgb(229, 134, 11)"></li>
                            <li class="" data-bs-target="#carousel1" data-bs-slide-to="2"
                                style="background-color: rgb(229, 134, 11)"></li>
                        </ol>

                        <div class="carousel-inner p-1">
                            <!-- testi item start -->
                            <div class="testi-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="{{ asset('img/testimonials/1.jpg') }}"
                                        class="img-thumbnail rounded-circle" alt="author image">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Budi</h3>
                                        <p class="text-muted m-0">User</p>
                                    </div>
                                </div>

                                <p class="text-muted mt-3">Legend Room memiliki website yang profesional dan
                                    user-friendly. Proses pencarian dan penyewaan ruang sangat mudah dilakukan.
                                    Informasi mengenai fasilitas dan layanan tambahan sangat membantu dalam menentukan
                                    pilihan. Saya sangat merekomendasikan Legend Room untuk kebutuhan pertemuan dan
                                    acara Anda.</p>
                                <div class="rating" style="color: rgb(229, 134, 11)">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <!-- Testi Item end-->

                            <!-- testi item start -->
                            <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="{{ asset('img/testimonials/2.jpg') }}"
                                        class="img-thumbnail rounded-circle" alt="author image">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Lina</h3>
                                        <p class="text-muted m-0">User</p>
                                    </div>
                                </div>

                                <p class="text-muted mt-3">Website Legend Room benar-benar memudahkan saya dalam
                                    menemukan dan menyewa ruang meeting yang sesuai dengan kebutuhan. Desainnya elegan
                                    dan navigasinya intuitif. Informasi tentang setiap ruang lengkap dan jelas, sehingga
                                    saya bisa memilih dengan mudah. Pelayanan yang diberikan juga sangat memuaskan!</p>
                                <div class="rating " style="color: rgb(229, 134, 11)">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <!-- Testi Item end-->

                            <!-- testi item start -->
                            <div class="testi-item carousel-item bg-white shadow-sm rounded p-4 mb-5">
                                <div class="testi-author-info d-flex align-items-center">
                                    <img src="{{ asset('img/testimonials/3.jpg') }}"
                                        class="img-thumbnail rounded-circle" alt="author image">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Santoso</h3>
                                        <p class="text-muted m-0">User</p>
                                    </div>
                                </div>

                                <p class="text-muted mt-3">Saya sangat terkesan dengan website Legend Room.
                                    Fitur-fiturnya lengkap dan memudahkan saya dalam merencanakan acara di ruang
                                    konferensi mereka. Booking secara online sangat praktis dan efisien. Saya juga
                                    menyukai bagaimana mereka menampilkan detail setiap ruang dengan gambar yang bagus
                                    dan deskripsi yang informatif.</p>
                                <div class="rating " style="color: rgb(229, 134, 11)">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <!-- Testi Item end-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Team --}}
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-2 text-uppercase text-center">Laravel Legends Team</h2>
                    <hr class="w-50 mx-auto mb-5 mb-xl-4 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="card border-0">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <a href="http://instagram.com/shkilarma_">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                    src="{{ asset('img/team/shakila.jpg') }}" alt="Shakila">
                            </a>
                            <figcaption>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                                <a class="h6 text-white bsb-hover-fadeInRight mt-2 text-decoration-none" >See More</a>
                            </figcaption>
                        </figure>
                        <div class="card-body border bg-white p-4">
                            <h2 class="card-title h4 fw-bold mb-3">Shakila</h2>
                            <p class="card-text text-secondary">Menentukan visi dan strategi produk serta melakukan riset pengguna untuk memahami kebutuhan pasar target serta juga menentukan arah perusahaan</p>
                        </div>
                        <div class="card-footer border border-top-0 bg-white p-4">
                            <ul class="nav mb-0 bsb-nav-sep">
                                <li class="nav-item text-secondary">
                                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center"
                                        href="http://instagram.com/shkilarma_">
                                        <i class="fa-solid fa-person-chalkboard" style="font-size: 20px; color: rgb(229, 134, 11)"></i>
                                        <span class="ms-2 fs-6">Mentor</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0 align-items-stretch">
                <div class="col-12 col-lg-4">
                    <div class="card border-0 h-100 d-flex flex-column">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <a href="#!">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                    src="{{ asset('img/team/imel.jpg') }}" alt="Imelia Amanda">
                            </a>
                            <figcaption>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                                <a class="h6 text-white bsb-hover-fadeInRight mt-2 text-decoration-none">See More</a>
                            </figcaption>
                        </figure>
                        <div class="card-body border bg-white p-4">
                            <h2 class="card-title h4 fw-bold mb-3">Imelia Amanda</h2>
                            <p class="card-text text-secondary">Bertanggung jawab atas pengalaman pengguna dan antarmuka pengguna, memastikan desain yang intuitif dan menarik.</p>
                        </div>
                        <div class="card-footer border border-top-0 bg-white p-4">
                            <ul class="nav mb-0 bsb-nav-sep">
                                <li class="nav-item text-secondary">
                                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center"
                                        href="#!">
                                        <i class="fa-solid fa-pen-nib" style="font-size: 20px; color: rgb(229, 134, 11)"></i>
                                        <span class="ms-2 fs-6">UIUX Design</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card border-0 h-100 d-flex flex-column">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <a href="https://www.instagram.com/itsme_.deyaa?igsh=aWNuOGd2Ym0zbTZ6">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                    src="{{ asset('img/team/dela.jpg') }}" alt="Della Nursaifa Aslam">
                            </a>
                            <figcaption>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                                <a class="h6 text-white bsb-hover-fadeInRight mt-2 text-decoration-none" href="https://www.instagram.com/itsme_.deyaa?igsh=aWNuOGd2Ym0zbTZ6">See More</a>
                            </figcaption>
                        </figure>
                        <div class="card-body border bg-white p-4">
                            <h2 class="card-title h4 fw-bold mb-3">Della Nursaifa Aslam</h2>
                            <p class="card-text text-secondary">Mengembangkan dan mengimplementasikan antarmuka pengguna untuk aplikasi web, memastikan pengalaman pengguna yang lancar dan responsif. Bertanggung jawab untuk menerjemahkan desain UI/UX ke dalam apliaksi.</p>
                        </div>
                        <div class="card-footer border border-top-0 bg-white p-4">
                            <ul class="nav mb-0 bsb-nav-sep">
                                <li class="nav-item text-secondary">
                                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center"
                                        href="https://www.instagram.com/itsme_.deyaa?igsh=aWNuOGd2Ym0zbTZ6">
                                        <i class="fa-solid fa-laptop-code" style="font-size: 20px; color: rgb(229, 134, 11)"></i>
                                        <span class="ms-2 fs-6">Front End</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card border-0 h-100 d-flex flex-column">
                        <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                            <a href="https://www.instagram.com/alhadiid_aziz?igsh=MWxncnd0bjBuOGt1Mw==">
                                <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                    src="{{ asset('img/team/aziz.jpg') }}" alt="Aziz Alhadiid">
                            </a>
                            <figcaption>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                                <a class="h6 text-white bsb-hover-fadeInRight mt-2 text-decoration-none">See More</a>
                            </figcaption>
                        </figure>
                        <div class="card-body border bg-white p-4">
                            <h2 class="card-title h4 fw-bold mb-3">Aziz Alhadiid</h2>
                            <p class="card-text text-secondary">Menganalisis dan mengembangkan arsitektur server dan database untuk mendukung aplikasi web. Bertanggung jawab atas integrasi dan pengelolaan data, serta memastikan keamanan dan kinerja sistem backend.</p>
                        </div>
                        <div class="card-footer border border-top-0 bg-white p-4">
                            <ul class="nav mb-0 bsb-nav-sep">
                                <li class="nav-item text-secondary">
                                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center"
                                        href="https://www.instagram.com/alhadiid_aziz?igsh=MWxncnd0bjBuOGt1Mw==">
                                        <i class="fa-solid fa-database" style="font-size: 20px; color: rgb(229, 134, 11)"></i>
                                        <span class="ms-2 fs-6">Back End</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
