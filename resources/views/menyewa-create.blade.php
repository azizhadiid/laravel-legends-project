@extends('templates.main-layout-penyewa')

@section('title', 'Booking Ruangan')

@section('konten')
{{-- Switch Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Sewa Ruangan: <span class="" style="color: rgb(229, 134, 11)">{{ $ruangan->nama_ruangan }}</span></h3>
                    <form action="{{ route('sewa.store', $ruangan->id) }}" method="POST">
                        @csrf

                        <!-- Jam Mulai -->
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="datetime-local" name="jam_mulai" id="jam_mulai" class="form-control" required>
                        </div>

                        <!-- Jam Selesai -->
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="datetime-local" name="jam_selesai" id="jam_selesai" class="form-control" required>
                        </div>

                        <!-- Keperluan -->
                        <div class="mb-3">
                            <label for="keperluan" class="form-label">Keperluan</label>
                            <textarea name="keperluan" id="keperluan" class="form-control" rows="4" required></textarea>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex gap-3">
                            <button type="submit" class="btn-booking w-100 fw-bold">Ajukan Penyewaan</button>
                            <a  class="back w-100 fw-bold text-center" style="cursor: pointer" href="{{ route('sewa.index') }}">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('error'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Peringatan!',
        text: '{{ session("error") }}',
    });

</script>
@endif
@endsection