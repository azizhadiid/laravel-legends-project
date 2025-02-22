@extends('templates.main-layout-penyewa')

@section('title', 'Ruangan')

@section('konten')
<div class="container mt-3">
    <h2 class="text-center mb-4">Daftar Ruangan Dimiliki</h2>
    <div class="row">
        @foreach($ruangan as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ruangan/' . $item->gambar) }}" class="card-img-top" 
                    alt="{{ $item->nama_ruangan }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item->nama_ruangan }}</h5>
                    <p class="card-text flex-grow-1">{{ Str::limit($item->deskripsi, 100) }}</p>
                    <p class="card-text">
                        <strong>Rating: </strong>{!! str_repeat('⭐', $item->rating) !!}
                    </p>
                    <p class="card-text"><strong>Harga: </strong>Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                    <a href="{{ route('ruangan.user.detail', $item->id) }}" class="btn btn-light mt-auto">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection