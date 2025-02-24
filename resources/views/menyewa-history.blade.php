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

            <!-- Tabel Riwayat -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover rounded-3 overflow-hidden">
                    <thead style="background-color: #D2B48C; color: white;">
                        <tr>
                            <th>Nama Ruang</th>
                            <th>Nama Acara</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Bank</th>
                            <th>No Referensi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($history->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada riwayat pemesanan.</td>
                        </tr>
                        @else
                        @forelse ($history as $sewa)
                        <tr>
                            <td>{{ $sewa->ruangan->nama_ruangan }}</td>
                            <td>{{ $sewa->keperluan }}</td>
                            <td>{{ \Carbon\Carbon::parse($sewa->jam_mulai)->translatedFormat('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($sewa->jam_mulai)->format('H:i') }} -
                                {{ \Carbon\Carbon::parse($sewa->jam_selesai)->format('H:i') }}</td>
                            <td>{{ $sewa->bank }}</td>
                            <td>{{ $sewa->no_tagihan }}</td>
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
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
