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
                                <h2>our offers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            {{-- <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle">
                                <span>oUR sERVICES FOR YOU</span>
                                <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Want To work End --> --}}
            <div class="container">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (count ($subscriptions ?? '') > 0)
                <div class="row">
                @foreach ($subscriptions as $subscriptions)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <i class="flaticon-fitness"></i>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{ $subscriptions->name }}</a></h5>
                            <p>{{ $subscriptions->description }}</p>
                            <h2>{{ $subscriptions->price }}€ </h2>

                        </div>
                        <div class="img-cap">
                            <a href="{{ url('createorder/' .$subscriptions->id) }}" class="">Order your subscription <i class="ti-arrow-right"></i></a>
                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
                @endforeach
                @else
                    <p>Data not found</p>
                    @endif
                </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
    </main>

@endsection