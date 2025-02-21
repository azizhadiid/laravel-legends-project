@extends('admin.templates.main-layout-admin')

@section('title', 'Penyewa Ruangan')

@section('subtitle', 'Penyewa Ruangan')

@section('konten')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body" style="background-color: #FEFBF6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title m-0" style="color: #B67352; font-weight: 600">Daftar Penyewaan Ruangan (Pending)</h5>
                </div>
                {{-- Alert Sukses --}}
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
                <p style="color: #B67352; font-weight: 400">Admin memiliki wewenang untuk mengelola ruangan yang telah dibayar, termasuk memperbarui status
                    penggunaan, mengubah informasi pemesanan, atau melakukan tindakan lain yang diperlukan. Dengan fitur
                    ini, admin dapat memastikan setiap ruangan digunakan sesuai dengan ketentuan dan kebutuhan penyewa.
                </p>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th style="color: #B67352; font-weight: 600">No</th>
                            <th style="color: #B67352; font-weight: 600">Nama Penyewa</th>
                            <th style="color: #B67352; font-weight: 600">Ruangan</th>
                            <th style="color: #B67352; font-weight: 600">Jam Mulai</th>
                            <th style="color: #B67352; font-weight: 600">Jam Selesai</th>
                            <th style="color: #B67352; font-weight: 600">Keperluan</th>
                            <th style="color: #B67352; font-weight: 600">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sewaRuangan as $index => $sewa)
                        <tr>
                            <td style="color: #B67352; font-weight: 400">{{ $index + 1 }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->user->nama }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->ruangan->nama_ruangan }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->jam_mulai }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->jam_selesai }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $sewa->keperluan }}</td>
                            <td>
                                <div class="button-container">
                                    <form action="{{ route('admin.sewa.verifikasi', $sewa->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="approved">
                                        <button type="submit" class="btn update">Approve</button>
                                    </form>
    
                                    <form action="{{ route('admin.sewa.verifikasi', $sewa->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="rejected">
                                        <button type="submit" class="btn logout">Reject</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </div>
</div>
@endsection
