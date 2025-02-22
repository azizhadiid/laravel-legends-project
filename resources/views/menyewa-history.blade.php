@extends('templates.main-layout-penyewa')

@section('title', 'Riwayat Booking')

@section('konten')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 mb-5">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">Riwayat Pemesanan</h2>
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>⚠️ Peringatan!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <!-- Pencarian -->
            <form action="{{ route('sewa.history') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control rounded-start"
                        placeholder="Cari berdasarkan nama ruang atau acara..." value="{{ request('search') }}">
                    <button type="submit" class="btn text-white" style="background-color: #8B5A2B;">🔍 Cari</button>
                </div>
            </form>

            <!-- Tabel Riwayat -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover rounded-3 overflow-hidden">
                    <thead style="background-color: #D2B48C; color: white;">
                        <tr>
                            <th>Nama Ruang</th>
                            <th>Nama Acara</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($history as $sewa)
                        <tr>
                            <td>{{ $sewa->ruangan->nama_ruangan }}</td>
                            <td>{{ $sewa->keperluan }}</td>
                            <td>{{ \Carbon\Carbon::parse($sewa->jam_mulai)->translatedFormat('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($sewa->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($sewa->jam_selesai)->format('H:i') }}</td>
                            <td>
                                @if ($sewa->status == 'approved')
                                <span class="badge bg-success">✅ Disetujui</span>
                                @elseif ($sewa->status == 'pending')
                                <span class="badge bg-warning text-dark">⏳ Pending</span>
                                @else
                                <span class="badge bg-danger">❌ Ditolak</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada riwayat pemesanan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
