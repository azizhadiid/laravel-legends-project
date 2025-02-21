@extends('admin.templates.main-layout-admin')

@section('title', 'Tambah Ruangan')

@section('subtitle', 'Form Tambah Ruangan')

@section('konten')
{{-- Switch Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <div class="card-body" style="background-color: #FEFBF6">
                <h5 class="card-title" style="color: #B67352; font-weight: 600">Upload Ruangan</h5>

                <!-- Upload Ruangan -->
                <form action="{{ route('ruangan.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="nama_ruangan" class="form-label" style="color: #B67352; font-weight: 500">Nama Ruangan</label>
                        <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" required style="color: #B67352; font-weight: 400" >
                    </div>
                    <div class="col-12">
                        <label for="deskripsi" class="form-label" style="color: #B67352; font-weight: 500">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" style="color: #B67352; font-weight: 500" required></textarea>
                    </div>
                    <div class="col-12">
                        <label for="kapasitas" class="form-label" style="color: #B67352; font-weight: 500">Kapasitas</label>
                        <input type="number" name="kapasitas" id="kapasitas" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="col-12">
                        <label for="category" class="form-label" style="color: #B67352; font-weight: 500">Kategori</label>
                        <input type="text" name="category" id="category" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="col-12">
                        <label for="rating" class="form-label" style="color: #B67352; font-weight: 500">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="col-12">
                        <label for="location" class="form-label" style="color: #B67352; font-weight: 500">Lokasi</label>
                        <input type="text" name="location" id="location" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="col-12">
                        <label for="harga" class="form-label" style="color: #B67352; font-weight: 500">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="col-12">
                        <label for="gambar" class="form-label" style="color: #B67352; font-weight: 500">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" style="color: #B67352; font-weight: 500" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn update">Upload</button>
                        <a href="{{url('/admin/ruangan')}}" class="btn logout">Cencel</a>
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
