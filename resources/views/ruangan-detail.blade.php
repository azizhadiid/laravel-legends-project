@extends('templates.main-layout-penyewa')

@section('title', 'Ruangan Detail')

@section('konten')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/ruangan/' . $ruangan->gambar) }}" class="img-fluid rounded mb-3 mb-md-0" alt="{{ $ruangan->nama_ruangan }}">
        </div>
        <div class="col-md-6 mb-3">
            <h2>{{ $ruangan->nama_ruangan }}</h2>
            <p class="text-muted">{{ $ruangan->category }}</p>
            <p><strong>Lokasi:</strong> {{ $ruangan->location }}</p>
            <p><strong>Kapasitas:</strong> {{ $ruangan->kapasitas }} orang</p>
            <p><strong>Harga:</strong> Rp{{ number_format($ruangan->harga, 0, ',', '.') }}</p>
            <p><strong>Rating:</strong> {!! str_repeat('⭐', $ruangan->rating) !!}</p>
            <p>{{ $ruangan->deskripsi }}</p>
            <a href="{{ route('ruangan.user.index') }}" class="back" style="margin-right: 15px">Kembali</a>
            <a href="{{ route('sewa.create', $ruangan->id) }}" class="btn-booking">Sewa Sekarang</a>
        </div>
    </div>
</div>
@endsection