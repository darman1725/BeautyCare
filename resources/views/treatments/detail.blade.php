@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Detail Treatment</div>
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
                        <a href="#">Treatment</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Treatment</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $treatment->nama }}</div>
            </div>


            <!-- Treatment -->
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('storage/' . $treatment->image) }}" class="img-fluid">
                </div>
                <div class="col-12 col-md-8">
                    <dl class="row">
                      
                        <dt class="col-sm-3">Deskripsi</dt>
                        <dd class="col-sm-9">{{ $treatment->deskripsi }}</dd>
                      
                        <dt class="col-sm-3">Harga</dt>
                        <dd class="col-sm-9">Rp {{ number_format($treatment->harga, 0, ',', '.') }}</dd>
                      </dl>
                </div>
            </div>
            <!-- End treatment -->
        </div>
    </div>
</div>
@endsection