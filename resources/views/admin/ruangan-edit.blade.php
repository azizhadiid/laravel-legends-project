@extends('admin.templates.main-layout-admin')

@section('title', 'Edit Ruangan')

@section('subtitle', 'Form Edit Ruangan')

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
                <h5 class="card-title">Edit Ruangan</h5>

                <!-- Edit Ruangan -->
                <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST" enctype="multipart/form-data"
                    class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control"
                            value="{{ $ruangan->nama_ruangan }}">
                    </div>
                    <div class="col-12">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi"
                            class="form-control">{{ $ruangan->deskripsi }}</textarea>
                    </div>
                    <div class="col-12">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" name="kapasitas" id="kapasitas" class="form-control"
                            value="{{ $ruangan->kapasitas }}">
                    </div>
                    <div class="col-12">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" name="category" id="category" class="form-control"
                            value="{{ $ruangan->category }}">
                    </div>
                    <div class="col-12">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control"
                            value="{{ $ruangan->rating }}">
                    </div>
                    <div class="col-12">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" name="location" id="location" class="form-control"
                            value="{{ $ruangan->location }}">
                    </div>
                    <div class="col-12">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" value="{{ $ruangan->harga }}">
                    </div>
                    <div class="col-12">
                        <label for="foto_ruangan" class="form-label">Gambar</label>
                        <input type="file" name="foto_ruangan" id="foto_ruangan" class="form-control">
                        @if($ruangan->foto_ruangan)
                        <img src="{{ asset('storage/' . $ruangan->foto_ruangan) }}" width="100">
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
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
