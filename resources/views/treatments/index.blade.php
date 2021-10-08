@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Treatments</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Treatments</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <a href="{{ route('cars.create') }}" class="btn btn-primary btn-sm"><i class="gd-plus"></i> Tambah Treatments Baru</a>
            </div>


            <!-- Treatments -->
            <div class="table-responsive-xl">
                <table class="table text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama Treatments</th>
                            <th class="font-weight-semi-bold border-top-0 py-2" style="width: 500px">Deskripsi</th>
                            <th class="font-weight-semi-bold border-top-0 py-2 text-center">Foto</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Harga</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($treatments as $treatment)
                            <tr>
                                <td class="py-3">{{ $loop->iteration }}</td>
                                <td class="py-3">{{ $treatment->nama }}</td>
                                <td class="py-3">{{ $treatment->deskripsi}}</td>
                                <td class="py-3 text-center"><img src="{{ asset('storage/' . $treatment->image) }}" style="height: 100px"></td>
                                <td class="py-3">{{ $treatment->harga }}</td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="{{ route('treatments.show', $treatment->id) }}">
                                            <i class="gd-eye icon-text"></i>
                                        </a>
                                        <a class="link-dark d-inline-block" href="{{ route('treatments.edit', $treatment->id) }}">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>

                                        <form action="{{ route('treatments.destroy', $treatment->id) }}" method="POST" class="d-inline">
                                           @csrf
                                           @method('DELETE')
                                           <button class="link-dark d-inline-block" type="submit" style="border: none; outline: none; background: none; padding: 0">
                                                <i class="gd-trash icon-text"></i>
                                            </button>
                                       </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Treatments -->
        </div>
    </div>
</div>
@endsection