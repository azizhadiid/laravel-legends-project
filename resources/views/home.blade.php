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
            <div class="d-flex">
                <a href="{{url('/logout')}}" class="btn btn-danger logout">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert-success">
            <h4>Welcome, Home Page!</h4>
            <p>Selamat datang di halaman Home. Anda telah berhasil login.</p>
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
