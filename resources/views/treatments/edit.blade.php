@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Edit Treatment</div>
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
                    <li class="breadcrumb-item active" aria-current="page">Edit Treatment</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Form Edit Treatment</div>
            </div>


            <!-- Form -->
            <div>
                <form action="{{ route('treatments.update', $treatment->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama Treatment</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $treatment->nama }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="deskripsi">Deskripsi Treatment</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="3">{{ $treatment->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="image">Foto Treatment</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $treatment->image }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $treatment->harga }}">
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