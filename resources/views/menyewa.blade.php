<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Legends Room</a>
            <a class="navbar-brand" href="{{url('/profile')}}">Profile</a>
            <a class="navbar-brand" href="{{url('/sewa')}}">Menyewa</a>
            <a class="navbar-brand" href="{{url('/history')}}">History</a>
            <div class="d-flex">
                <a href="{{url('/logout')}}" class="btn btn-danger logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Daftar Ruangan</h1>
        <div class="grid">
            @foreach($ruangan as $r)
            <div class="card">
                <img src="{{ asset('img/ruangan/' . $r->gambar) }}" alt="Gambar Ruangan">
                <h3>{{ $r->nama_ruangan }}</h3>
                <p>{{ $r->deskripsi }}</p>
                <p>Harga: Rp {{ number_format($r->harga, 0, ',', '.') }}</p>
                <a href="{{ route('sewa.create', $r->id) }}" class="btn btn-primary">Sewa</a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
