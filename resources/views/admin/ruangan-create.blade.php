@extends('admin.templates.main-layout-admin')

@section('title', 'Tambah Ruangan')

@section('subtitle', 'Form Tambah Ruangan')

@section('konten')
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            <div>
                @foreach ($errors->all() as $error)
                <p class="m-0">{{ $error }}</p>
                @endforeach
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-lg">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Upload Ruangan</h5>

                <!-- Upload Ruangan -->
                <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" name="kapasitas" id="kapasitas" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" name="category" id="category" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <a href="{{url('/admin/ruangan')}}" class="btn btn-secondary">Cencel</a>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

@if (session('warning'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Peringatan!',
        text: '{{ session("warning") }}',
    });

</script>
@endif
@endsection
