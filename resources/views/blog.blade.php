@extends('layouts.main')

@section('main-container')

    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        @if (count ($newsList ?? '') > 0)
                            @foreach($newsList as $news)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img mt-0 rounded-0" src="assets/img/blog/{{ $news->image }}" alt="">
                                    <a href="#" class="blog_item_date">

                                        <h3>{{ $news->created_at->format('d') }}</h3>
                                        <p>{{$news->created_at->format('F')}}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                <form action="{{ url('blog/' . $news->id) }}" method="POST">
                                    <a class="d-inline-block" href="{{url('/blog_details/' .$news->id)}}" title="detail">
                                    {{ csrf_field() }}
                                    </form>
                                        <h2 class="blog-head">{{ $news->title}}</h2>
                                    </a>
                                    <p>{{ \Illuminate\Support\Str::limit($news->description, 400) }}</p>

                                </div>
                            </article>
                            @endforeach
                            @else
                    <p>Data not found</p>
                    @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form>
                                    <div class="form-group">
                                        <div class="input-group mb-5">
                                        <input type="search" class="form-control" placeholder="Find news here"  name="search" value="{{ request('search') }}">
                                            <div class="input-group-append">
                                                <button class="btns" type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                                    <a href="{{url('/blog')}}" title="blog"><i class="btn btn-primary" style="width: 100%;">Clear search</i></a>
                                </form>
                            </aside>
                    </section>
                    <!-- Blog Area End -->
                </main>

@endsection
