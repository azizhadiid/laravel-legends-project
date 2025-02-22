@extends('templates.main-layout-penyewa')

@section('title', 'Home')

@section('konten')
<!-- Hero Section -->
<section class="hero" id="Beranda">
    <main class="content">
        <h1>Selamat Datang di Sistem Booking Ruangan Acara</h1>
        <p>Temukan tempat terbaik untuk seminar, pesta, konferensi, dan berbagai acara spesial Anda.</p>
        <a href="{{url('/sewa')}}" class="btn-booking">Pesan Sekarang</a>
    </main>
</section>

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
                        <a href="#" class="btn btn-light mt-auto">Lihat Detail</a> <!-- Warna tombol lebih cocok -->
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
              <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active" style="background-color: rgb(229, 134, 11)"></li>
              <li class="" data-bs-target="#carousel1" data-bs-slide-to="1" style="background-color: rgb(229, 134, 11)"></li>
              <li class="" data-bs-target="#carousel1" data-bs-slide-to="2" style="background-color: rgb(229, 134, 11)"></li>
            </ol>

            <div class="carousel-inner p-1">
              <!-- testi item start -->
              <div class="testi-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                <div class="testi-author-info d-flex align-items-center">
                  <img src="{{ asset('img/testimonials/1.jpg') }}" class="img-thumbnail rounded-circle" alt="author image">
                  <div class="author ms-3">
                    <h3 class="fs-6 mb-1">Budi</h3>
                    <p class="text-muted m-0">User</p>
                  </div>
                </div>

                <p class="text-muted mt-3">Legend Room memiliki website yang profesional dan user-friendly. Proses pencarian dan penyewaan ruang sangat mudah dilakukan. Informasi mengenai fasilitas dan layanan tambahan sangat membantu dalam menentukan pilihan. Saya sangat merekomendasikan Legend Room untuk kebutuhan pertemuan dan acara Anda.</p>
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
                  <img src="{{ asset('img/testimonials/2.jpg') }}" class="img-thumbnail rounded-circle" alt="author image">
                  <div class="author ms-3">
                    <h3 class="fs-6 mb-1">Lina</h3>
                    <p class="text-muted m-0">User</p>
                  </div>
                </div>

                <p class="text-muted mt-3">Website Legend Room benar-benar memudahkan saya dalam menemukan dan menyewa ruang meeting yang sesuai dengan kebutuhan. Desainnya elegan dan navigasinya intuitif. Informasi tentang setiap ruang lengkap dan jelas, sehingga saya bisa memilih dengan mudah. Pelayanan yang diberikan juga sangat memuaskan!</p>
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
                  <img src="{{ asset('img/testimonials/3.jpg') }}" class="img-thumbnail rounded-circle" alt="author image">
                  <div class="author ms-3" >
                    <h3 class="fs-6 mb-1">Santoso</h3>
                    <p class="text-muted m-0">User</p>
                  </div>
                </div>

                <p class="text-muted mt-3">Saya sangat terkesan dengan website Legend Room. Fitur-fiturnya lengkap dan memudahkan saya dalam merencanakan acara di ruang konferensi mereka. Booking secara online sangat praktis dan efisien. Saya juga menyukai bagaimana mereka menampilkan detail setiap ruang dengan gambar yang bagus dan deskripsi yang informatif.</p>
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

@endsection
