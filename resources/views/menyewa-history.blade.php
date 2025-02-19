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
        <h1>Riwayat Penyewaan</h1>
        <table>
            <tr>
                <th>Nama Ruangan</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Keperluan</th>
                <th>Status</th>
                <th>Bank</th>
                <th>No Tagihan</th>
            </tr>
            @foreach($history as $h)
            <tr>
                <td>{{ $h->ruangan->nama_ruangan }}</td>
                <td>{{ $h->jam_mulai }}</td>
                <td>{{ $h->jam_selesai }}</td>
                <td>{{ $h->keperluan }}</td>
                <td>{{ ucfirst($h->status) }}</td>
                <td>{{ $h->bank }}</td>
                <td>{{ $h->no_tagihan }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- Bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Switch Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Kode JS --}}
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
