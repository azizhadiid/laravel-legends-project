@extends('admin.templates.main-layout-admin')

@section('title', 'Ruangan')

@section('subtitle', 'Tabel Ruangan')

@section('konten')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title m-0" style="color: #B67352; font-weight: 600">Data Ruangan</h5>
                    <a href="{{ route('ruangan.create') }}" class="btn tambah">Tambah Ruangan</a>
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
                <p style="color: #B67352; font-weight: 400">Tempat untuk menambahkan data ruangan. Di sini, Anda dapat memasukkan informasi lengkap tentang
                    setiap ruangan yang tersedia di Legends Room. Pastikan untuk memasukkan detail seperti nama ruangan,
                    ukuran, kapasitas maksimal, fasilitas yang tersedia, dan harga sewa per jam. Ruangan yang telah
                    ditambahkan akan muncul di daftar ruangan yang dapat disewa oleh pengguna. Jika Anda memiliki foto
                    atau gambar ruangan, silakan unggah untuk memberikan gambaran yang lebih jelas kepada calon penyewa.
                </p>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th style="color: #B67352; font-weight: 600">Nama Ruangan</th>
                            <th style="color: #B67352; font-weight: 600">Kategori</th>
                            <th style="color: #B67352; font-weight: 600">Rating</th>
                            <th style="color: #B67352; font-weight: 600">Lokasi</th>
                            <th style="color: #B67352; font-weight: 600">Harga</th>
                            <th style="color: #B67352; font-weight: 600">Foto</th>
                            <th style="color: #B67352; font-weight: 600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ruangan as $r)
                        <tr>
                            <td style="color: #B67352; font-weight: 400">{{ $r->nama_ruangan }}</td>                            
                            <td style="color: #B67352; font-weight: 400">{{ $r->category }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $r->rating }}</td>
                            <td style="color: #B67352; font-weight: 400">{{ $r->location }}</td>
                            <td style="color: #B67352; font-weight: 400">Rp {{ number_format($r->harga, 0, ',', '.') }}</td>
                            <td>
                                @if($r->gambar)
                                <img src="{{ asset('img/ruangan/' . $r->gambar) }}" alt="Foto Ruangan" width="100" class="rounded">
                                @else
                                Tidak ada foto
                                @endif
                            </td>
                            <td>
                                <div class="button-container">
                                    <a href="{{ route('ruangan.edit', $r->id) }}" class="btn mb-2 button update">Edit</a>
                                    <form action="{{ route('ruangan.destroy', $r->id) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn delete-btn button logout" data-id="{{ $r->id }}">Hapus</button>
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

<script src="{{ asset('js/ruanganAdmin.js') }}"></script>
@endsection
