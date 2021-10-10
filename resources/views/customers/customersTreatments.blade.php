@extends('layouts.treatments')

@section('content')

<section class="treatments spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($treatments as $treatment)
                        <div class="col-lg-4 col-md-4">
                            <div class="treatment__item">
                                <div class="treatment__item__pic__slider owl-carousel">
                                    <img src="{{ asset('storage/' . $treatment->image) }}" alt="" style="width: 262px" height="151px">
                                </div>
                                <div class="treatment__item__text">
                                    <div class="treatment__item__text__inner">
                                        <h5 style="height: 70px !important"><a href="{{ route('detail', $treatment->id) }}">{{ $treatment->nama }}</a></h5>

                                        <span>{{ $treatment->deskripsi}}</span>

                                    </div>
                                    <div class="treatment__item__price">
                                        <a href="{{ route('treatments.create', $treatment->id) }}"><span class="treatments-option">Detail</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $treatments->links() }}
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
@endsection
