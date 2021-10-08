@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Doctor</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Doctor</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <a href="{{ route('doctors.create') }}" class="btn btn-primary btn-sm"><i class="gd-plus"></i> Tambah Doctor Baru</a>
            </div>


            <!-- Doctor -->
            <div class="table-responsive-xl">
                <table class="table text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama Dokter</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Spesialis</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Jadwal</th>
                             <td class="py-3 text-center"><img src="{{ asset('storage/' . $doctor->image) }}" style="height: 100px"></td>
                            <th class="font-weight-semi-bold border-top-0 py-2">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doktor)
                            <tr>
                                <td class="py-3">{{ $loop->iteration }}</td>
                                <td class="py-3">{{ $doctor->nama }}</td>
                                <td class="py-3">{{ $doctor->spesialis}}</td>
                                <td class="py-3">{{ $doctor->jadwal}}</td>
                                <td class="py-3 text-center"><img src="{{ asset('storage/' . $doctor->image) }}" style="height: 100px"></td>
                                <td class="py-3">{{ $doctor->harga }}</td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="{{ route('doctors.show', $doctor->id) }}">
                                            <i class="gd-eye icon-text"></i>
                                        </a>
                                        <a class="link-dark d-inline-block" href="{{ route('doctors.edit', $doctor->id) }}">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>

                                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
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
            <!-- End Doctor -->
        </div>
    </div>
</div>
@endsection