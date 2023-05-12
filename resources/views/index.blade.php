@extends('layouts.main')

@section('main-container')

<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft">Build Perfect body Shape for good and
                                    Healthy life.</h1>
                                <a href="/register" class="btn hero-btn" data-animation="fadeInLeft">became
                                    a member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider Area End-->
    <!--? About Area Start -->
    <section class="about-area section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src={{url('assets/img/gallery/about.png')}} alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <span>ABOUT oUR GYM</span>
                            <h2>Safe Body building proper Solutions That Saves our Valuable Time!</h2>
                        </div>
                        <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts.
                            You can select your favorite layouts & elements for cular ts with unlimited ustomization
                            possibilities. Pixel-perfect replication of the designers is intended.</p>
                        <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient
                            anipurpose layouts. You can select your favorite layouts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-2 Area End -->
    <!--? Services Area Start -->
    <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-10 col-sm-10">
                        <div class="section-tittle section-tittle2">
                            <span>oUR sERVICES FOR YOU</span>
                            <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <div class="container">
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
                            <a href="/services" class="">See our other offers<i class="ti-arrow-right"></i></a>
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
        </div>
    </section>
    <!-- Services Area End -->
    <!--? About-2 Area Start -->
    <section class="about-area2 testimonial-area section-padding30 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-11 col-sm-11">
                    <!-- about-img -->
                    <div class="about-img2">
                        <img src="assets/img/gallery/about2.png" alt="">
                        <!-- Shape -->
                        <div class="shape-qutaion d-none d-sm-block">
                            <img src="assets/img//gallery/qutaion.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-9">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-55">
                            <span>Client Feedback</span>
                            <h2>What Our Client thik about our gym</h2>
                        </div>
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Jhon Smith<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Jhon Smith<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-2 Area End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-15 fix">
            <div class="row">
                @foreach($galleryBigImage as $item)
                <div class="col-lg-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img"
                        style="background-image: url(assets/img/gallery/{{ $item->image }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="gallery"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="row">
                    @foreach($galleryLimit as $item2)
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img small-img"
                                    style="background-image: url(assets/img/gallery/{{ $item2->image }});"></div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="gallery"><i class="ti-arrow-top-right"></i></a>
                                        <h3>Best fitness gallery</h3>
                                        <p>Fitness, Body</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="section-tittle">
                            <span>oUR TEAM MEMBERS</span>
                            <h2>Our Most Exprienced Trainers</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="/services" class="btn wantToWork-btn f-right">Get subscription</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Team Ara Start -->
        <div class="team-area pb-150">
            <div class="container">
                <div class="row">
                    <div class="gtco-testimonials">
                        <div class="owl-carousel owl-carousel1 owl-theme">
                            @foreach ($coach as $coaches)
                            <div class="col-lg-12 col-md-7 col-sm-6">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                   <img src="assets/img/coaches/{{ $coaches->image}}" alt="">
                                        <div class="team-caption">

                                            <h3><a href="#">{{ $coaches->firstname }} {{ $coaches->lastname }}</a></h3>
                                            <span>{{ $coaches->description }}</span>
                                            <!-- Blog Social -->
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Ara End -->
        <!--? Want To work -->
        {{-- <section class="wantToWork-area w-padding section-bg"
            data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="wantToWork-caption">
                            <h2>April membership offer available Now</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Want To work End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>rECENT NEWS FORM BLOG</span>
                            <h2>gYM TIPS news fOR YOU THAT selected by us</h2>
                        </div>
                    </div>
                </div>
                @if (count ($news ?? '') > 0)
                <div class="row">
                @foreach ($news as $news)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/blog/{{ $news->image }}" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>{{ $news->created_at->format('d') }}</span>
                                        <p>{{$news->created_at->format('F')}}</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>{{ $news->title}}</span>
                                    <h3><a href="/blog">{{ $news->title}}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>Data not found</p>
                    @endif
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
</main>
@endsection
