@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Edit Dokter</div>
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
                    <li class="breadcrumb-item active" aria-current="page">Edit Dokter</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Form Edit Dokter</div>
            </div>


            <!-- Form -->
            <div>
                <form action="{{ route('dokters.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $doctor->nama }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="spesialis">Spesialis</label>
                            <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ $doctor->spesialis }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="jadwal">Jadwal/label>
                            <input type="date" class="form-control" id="jadwal" name="jadwal" value="{{ $doctor->jadwal }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="image">Foto</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $doctor->image }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $doctor->harga }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
            <!-- End Form -->
        </div>
    </div>
</div>
@endsection