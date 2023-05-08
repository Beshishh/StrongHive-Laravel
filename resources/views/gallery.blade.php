@extends('layouts.main')

@section('main-container')

    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>our gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30">
            <div class="container-fluid p-0 fix">
                <div class="row">
                @foreach($galleryList as $item)
                    <div class="col-lg-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/{{ $item->image }});"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
    </main>

@endsection
