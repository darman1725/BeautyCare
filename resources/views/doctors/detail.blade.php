@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Detail Doctor</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Doctor</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Doctor</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $doctor->nama }}</div>
            </div>


            <!-- Doctor -->
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('storage/' . $doctor->image) }}" class="img-fluid">
                </div>
                <div class="col-12 col-md-8">
                    <dl class="row">
                      
                        <dt class="col-sm-3">Spesialis</dt>
                        <dd class="col-sm-9">{{ $doctor->spesialis }}</dd>

                        <dt class="col-sm-3">Jadwal</dt>
                        <dd class="col-sm-9">{{ $doctor->jadwal }}</dd>
                      
                        <dt class="col-sm-3">Harga</dt>
                        <dd class="col-sm-9">Rp {{ number_format($doctor->harga, 0, ',', '.') }}</dd>
                      </dl>
                </div>
            </div>
            <!-- End Doctor -->
        </div>
    </div>
</div>
@endsection