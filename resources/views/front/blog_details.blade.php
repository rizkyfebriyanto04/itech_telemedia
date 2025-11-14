@extends('layouts.master')

@section('title', 'Berita')

@section('content')

<!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="{{asset('landing/images/banner-shape1.png')}}" alt="image" > </span>
        <span class="banner_shape2"> <img src="{{asset('landing/images/banner-shape2.png')}}" alt="image" > </span>
        <span class="banner_shape3"> <img src="{{asset('landing/images/banner-shape3.png')}}" alt="image" > </span>

        <div class="bred_text">
          <h1>News & Updates</h1>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><span>»</span></li>
            <li><a href="">Berita Itech</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Blog Details Block -->
    <section class="blog_detail_section">
      <div class="container">
        <div class="blog_inner_pannel">
            {{-- <div class="review">
              <span>Review</span>
              <span>45 min ago</span>
            </div> --}}
            <div class="section_title">
              <h2>{{ $artikel->title }}</h2>
            </div>
            <div class="main_img" style="text-align: center">
              <img src="{{ asset('berita/' . $artikel->image) }}" alt="image">
            </div>
            <div class="info" style="color: black">
                <p style="color: black">
                    {!! $artikel->content !!}
                </p>
            </div>
        </div>
      </div>
    </section>

    <!-- Story-Section-Start -->
    <section class="row_am latest_story" id="blog">
      <!-- container start -->
       <div class="container">
           <!-- row start -->
           <div class="row">
             <!-- story -->
             @foreach ($current_artikel as $item)
                <div class="col-md-4">
                    <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                        <div class="story_img">
                        <img src="{{ asset('berita/' . $item->image) }}" alt="image" width="50%">
                        </div>
                        <div class="story_text" >
                            <h3>{{ $item->title }}</h3>
                            <p style="color: black">
                                {!! Str::words(strip_tags($item->content), 10, '...') !!}
                            </p>
                            <a href="{{ route('get-detail-blog', $item->slug) }}">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach

             {{-- <!-- story -->
             <div class="col-md-4">
                 <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                     <div class="story_img">
                       <img src="images/story02.png" alt="image" >
                       <span>45 min ago</span>
                     </div>
                     <div class="story_text">
                           <h3>Top rated app! Yupp.</h3>
                         <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                         <a href="#">READ MORE</a>
                     </div>
                 </div>
             </div>

             <!-- story -->
             <div class="col-md-4">
                 <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                     <div class="story_img">
                       <img src="images/story03.png" alt="image" >
                       <span>45 min ago</span>
                     </div>
                     <div class="story_text">
                           <h3>Creative ideas on app.</h3>
                         <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                         <a href="#">READ MORE</a>
                     </div>
                 </div>
             </div> --}}
           </div>
           <!-- row end -->
       </div>
       <!-- container end -->
     </section>
     <!-- Story-Section-end -->

@endsection
