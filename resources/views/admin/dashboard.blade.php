@extends('admin.templates.main-layout-admin')

@section('title', 'Dashboard')

@section('subtitle', 'Dashboard')

@section('konten')

{{-- Bagian Total dari database --}}
<div class="row">
    <!-- user Card -->
    <div class="col">
        <div class="card info-card">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Pengguna</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                        style="background-color: #fff7ea;">
                        <i class="bi bi-person-circle" style="color: #8c583d; font-weight: 600"></i>
                    </div>
                    <div class="ps-3">
                        <h6 style="color: #B67352; font-weight: 600">{{ $totalUsers }}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End user Card -->

    <!-- admin Card -->
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Admin</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                        style="background-color: #fff7ea;">
                        <i class="bi bi-people-fill" style="color: #8c583d; font-weight: 600"></i>
                    </div>
                    <div class="ps-3">
                        <h6 style="color: #B67352; font-weight: 600">{{ $totalAdmin }}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End admin Card -->

    <!-- ruangan Card -->
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Ruangan</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                        style="background-color: #fff7ea;">
                        <i class="bi bi-house-door" style="color: #8c583d; font-weight: 600"></i>
                    </div>
                    <div class="ps-3">
                        <h6 style="color: #B67352; font-weight: 600">{{ $totalRuangan }}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End ruangan Card -->

    <!-- ruangan Card -->
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Tersewa</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                        style="background-color: #fff7ea;">
                        <i class="bi bi-bag-fill" style="color: #8c583d; font-weight: 600"></i>
                    </div>
                    <div class="ps-3">
                        <h6 style="color: #B67352; font-weight: 600">{{ $totalSewa }}</h6>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End ruangan Card -->
</div>

{{-- Grafik --}}
<div class="row">
    <!-- Reports -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Pie Chart Database</h5>

                <!-- Pie Chart -->
                <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      var chartDom = document.querySelector("#pieChart");
                      var myChart = echarts.init(chartDom);
                      var option = {
                        title: {
                            text: 'Tampilan Data',
                            subtext: 'Jumlah Data',
                            left: 'center',
                            textStyle: {
                                color: '#8B5A2B', // Coklat tua untuk teks utama
                                fontSize: 16,
                                fontWeight: 'bold'
                            },
                            subtextStyle: {
                                color: '#3A6EA5', // Biru Denim untuk teks subjudul agar menarik
                                fontSize: 13
                            }
                        },
                          tooltip: {
                              trigger: 'item'
                          },
                          legend: {
                              orient: 'vertical',
                              left: 'left'
                          },
                          series: [{
                              name: 'Jumlah',
                              type: 'pie',
                              radius: '50%',
                              data: [
                                  { value: {{ $totalSewa }}, name: 'Sewa', itemStyle: { color: '#D2A679' } },   // Coklat Latte
                                  { value: {{ $totalRuangan }}, name: 'Ruangan', itemStyle: { color: '#A7C7A5' } }, // Hijau Sage
                                  { value: {{ $totalUsers }}, name: 'User', itemStyle: { color: '#3A6EA5' } }    // Biru Denim
                              ],
                              label: {
                                  color: '#8B5A2B', // Coklat tua untuk label agar terlihat kontras
                                  fontSize: 12
                              }
                          }]
                      };
                      myChart.setOption(option);
                  });
                </script>
                <!-- End Pie Chart -->

            </div>
        </div>
    </div><!-- End Reports -->
</div>

{{-- Tabel Data Sewa Ruangan --}}
<div class="row">
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Data Sewa Ruangan </h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col" style="color: #B67352; font-weight: 600">#</th>
                            <th scope="col" style="color: #B67352; font-weight: 600">Penyewa</th>
                            <th scope="col" style="color: #B67352; font-weight: 600">Ruangan</th>
                            <th scope="col" style="color: #B67352; font-weight: 600">Jam Mulai</th>
                            <th scope="col" style="color: #B67352; font-weight: 600">Jam Selesai</th>
                            <th scope="col" style="color: #B67352; font-weight: 600">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sewaRuangan as $sewa)
                        <tr>
                            <th scope="row" style="color: #B67352; font-weight: 400">{{ $sewa->id }}</th>
                            <td style="color: #B67352; font-weight: 400">
                                {{ $sewa->user->nama ?? 'User Tidak Diketahui' }}</td>
                            <td style="color: #B67352; font-weight: 400">
                                {{ $sewa->ruangan->nama_ruangan ?? 'Ruangan Tidak Diketahui' }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->jam_mulai }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->jam_selesai }}</td>
                            <td>
                                @if($sewa->status == 'approved')
                                <span class="badge bg-success">Approved</span>
                                @elseif($sewa->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                                @else
                                <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
    </div><!-- End Recent Sales -->
</div>
@endsection
