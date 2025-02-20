@extends('admin.templates.main-layout-admin')

@section('title', 'Penyewa Ruangan')

@section('subtitle', 'Penyewa Ruangan')

@section('konten')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title m-0">Daftar Penyewaan Ruangan (Pending)</h5>
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
                <p>Admin memiliki wewenang untuk mengelola ruangan yang telah dibayar, termasuk memperbarui status
                    penggunaan, mengubah informasi pemesanan, atau melakukan tindakan lain yang diperlukan. Dengan fitur
                    ini, admin dapat memastikan setiap ruangan digunakan sesuai dengan ketentuan dan kebutuhan penyewa.
                </p>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyewa</th>
                            <th>Ruangan</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Keperluan</th>
                            <th>Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sewaRuangan as $index => $sewa)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $sewa->user->username }}</td>
                            <td>{{ $sewa->ruangan->nama_ruangan }}</td>
                            <td>{{ $sewa->jam_mulai }}</td>
                            <td>{{ $sewa->jam_selesai }}</td>
                            <td>{{ $sewa->keperluan }}</td>
                            <td>
                                <form action="{{ route('admin.sewa.verifikasi', $sewa->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="approved">
                                    <button type="submit" class="btn btn-outline-success">Approve</button>
                                </form>

                                <form action="{{ route('admin.sewa.verifikasi', $sewa->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="btn btn-outline-danger">Reject</button>
                                </form>
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
