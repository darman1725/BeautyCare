@extends('layouts.treatments')

@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            @foreach ($treatments as $treatment)
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="offer-deal text-center px-2 px-lg-5" style="width:400px">
                    <div class="card-body">
                        <img src="{{ asset('images/' . $treatment->image) }}" alt="Card Image" style="width: 262px" height="151px">
                        <br><br>
                        <h4 class="mb-4" align="center">{{$treatment->nama}}</h4>
                        <hr />
                        <p class="mb-5">{{$treatment->deskripsi}}</p>
                        <br>
                        <a href="{{ route('treatments.detail', $treatment->id) }}"><img src="assets/images/shopping-cart.png" style="width:8%">Detail</a>
                        {{-- <p><a href="electrocautery" class="btn btn-white px-4 py-3"><img src="assets/images/shopping-cart.png" style="width:8%"> Detail</span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">
                <div class="row">
                    <img src="{{ asset('images/' . $treatment->image) }}" alt="" style="width: 262px" height="151px">
                </div>
                <br>
                <p class="mb-4" align="center">Price</p>
                <h2>{{$treatment->harga}}</h2>
                <hr />
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <h2>{{$treatment->nama}}</h2>
                <p>{{$treatment->deskripsi}}</p>
                <input type="submit" value="Reservasi" class="btn btn-primary py-3 px-5">
            </div>
        </div>
    </div>
</section>

@endsection
