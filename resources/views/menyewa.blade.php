@extends('templates.main-layout-penyewa')

@section('title', 'Sewa Ruangan')

@section('konten')
<div class="container mt-3">
    <h2 class="text-center mb-4">Daftar Ruangan</h2>
    <div class="row">
        @foreach($ruangan as $r)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('img/ruangan/' . $r->gambar) }}" class="card-img-top"
                    alt="Gambar Ruangan" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $r->nama_ruangan }}</h5>
                    <p class="card-text flex-grow-1 text-muted">{{ Str::limit($r->deskripsi, 100) }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($r->harga, 0, ',', '.') }}</p>
                    <a href="{{ route('sewa.create', $r->id) }}" class="btn-booking text-center">Sewa Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection