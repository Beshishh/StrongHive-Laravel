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
                     <h2>Blog Details</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Hero End -->
   <!--? Blog Area Start -->
   <section class="services-area pt-100 pb-150 section-bg" data-background="/assets/img/gallery/section_bg01.webp">
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/img/blog/' .$news->image) }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: white;">{{$news->title}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4" style ="color: white;">
                           <li><a></i> Created: {{ $news->created_at }}</a></li>
                           <li></i>Updated: {{ $news->updated_at }}</a></li>
                        </ul>
                        <p>
                        {{$news->description}}
                        </p>
                  <div class="blog_right_sidebar">
                     <aside class="single_sidebar_widget search_widget">
                        <a href="{{url('/blog')}}" title="blog"><i class="btn btn-primary">Back</i></a>
                     </aside>
      </section>
      <!-- Blog Area End -->
</main>

@endsection
