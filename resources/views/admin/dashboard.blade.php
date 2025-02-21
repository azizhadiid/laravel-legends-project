@extends('admin.templates.main-layout-admin')

@section('title', 'Dashboard')

@section('subtitle', 'Dashboard')

@section('konten')
{{-- user --}}
<div class="card-body" style="background-color: aliceblue">
    <h5 class="card-title">Total Users <span>| Now</span></h5>

    <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
            <h6>{{ $totalUsers }}</h6>
            <span class="text-success small pt-1 fw-bold">12%</span> 
            <span class="text-muted small pt-2 ps-1">increase</span>
        </div>
    </div>
</div>

{{-- Ruangan --}}
<div class="card-body" style="background-color: aliceblue">
    <h5 class="card-title">Total Ruangan <span>| Now</span></h5>

    <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
            <h6>{{ $totalRuangan }}</h6>
            <span class="text-success small pt-1 fw-bold">12%</span> 
            <span class="text-muted small pt-2 ps-1">increase</span>
        </div>
    </div>
</div>
@endsection
