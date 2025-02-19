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
            <div class="d-flex">
                <a href="{{url('/logout')}}" class="btn btn-danger logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Sewa Ruangan {{ $ruangan->nama_ruangan }}</h1>
        <form action="{{ route('sewa.store', $ruangan->id) }}" method="POST">
            @csrf
            <label>Jam Mulai:</label>
            <input type="datetime-local" name="jam_mulai" required>

            <label>Jam Selesai:</label>
            <input type="datetime-local" name="jam_selesai" required>

            <label>Keperluan:</label>
            <textarea name="keperluan" required></textarea>

            <button type="submit">Ajukan Penyewaan</button>
        </form>
    </div>

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
