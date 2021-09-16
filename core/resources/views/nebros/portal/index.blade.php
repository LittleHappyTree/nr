@extends('nebros.index')

@section('content')

<style type="text/css">



</style>


<!-- TESTIMONIALS 
==================================================-->
<!-- <section class="testimonial" id="testimonials">
  
</section> -->
<!-- ============================================ -->

<?php
  $url = Request::path();
  $url = str_replace('en/', '', $url);
  $url = explode('/', $url);
  $url = $url[0];

  $cek = \DB::table('banner_page')->where('url','like','%'.$url.'%')->count();
?>

@if($cek > 0)
<?php
  $bp = \DB::table('banner_page')->where('url','like','%'.$url.'%')->first();
?>
<div class="hero" id="hero" style="height: 30vh;">
  <!-- Swiper -->
  <div class="swiper-container classic">

    <div class="swiper-wrapper">
      <!-- a slide -->
      <div class="swiper-slide" style="background:url({{ asset('banner_page/'.$bp->photo) }});background-size: 100%;background-position: center;">
        <!-- <div class="slider-content"> -->
          <!-- <span>More than an agency in</span> -->
          <!-- <h1>Digital Age.</h1> -->
          <!-- <a href="#about" class="site-btn top_30">SEE MORE</a> -->
        <!-- </div> -->
      </div>

    </div>
      <!-- Add Pagination -->
  </div> <!-- Swiper Container end -->
  <!-- Social Links -->
</div>
@endif


<section id="news" class="news" style="background: white;">

  <!-- featured posts -->

  <div class="container wow fadeInUp">
    <div class="section-title bottom_15 top_30">
      <h2 class="title">{{ $title }}.</h2>
    </div>
          <div class="owl-carousel owl-theme testimonials" data-autoplay="true" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1" data-margin="30">

            <!-- a comment -->
              @foreach($featured as $dt)
              <div class="item">
                @if(\App::getLocale() == 'id')
                <a href="{{ url('/portal/'.$dt->slug) }}">
                @else
                <a href="{{ url('/en/portal/'.$dt->slug) }}">
                @endif

                  <!-- <div class="slider-news" style="background-image:url({{ asset('assets/front/img/blogs/'.$dt->main_image) }});"></div> -->

                  <div class="outitem" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(0,0,0, 1)),url({{ asset('blogs_blur/'.$dt->blurs->photo) }});">

                    <figure><img src="{{ asset('assets/front/img/blogs/'.$dt->main_image) }}"></figure>
                    <div class="name" style="z-index: 9999;">
                      @if(\App::getLocale() == 'id')
                      <h3 class="title" style="color: white;text-shadow: 2px 2px black;">{{ Str::limit($dt->title,20) }}</h3>
                      @else
                      <h3 class="title" style="color: white;text-shadow: 2px 2px black;">{{ Str::limit($dt->title_en,20) }}</h3>
                      @endif
                      <span style="color: white;text-shadow: 2px 2px black;">{{ $dt->bcategory->name }}</span>
                    </div>
                    <p style="color: white;text-shadow: 2px 2px black;">{{ Str::limit(strip_tags($dt->content),170) }}</p>
                  </div>
                </a>
              </div>
              @endforeach
              <!-- a comment -->

          </div>
  </div>



  <!-- end featured posts -->

  <div class="container">
    @foreach($data->chunk(3) as $dtChunk)
    <div  class="row">
      <!-- anews -->
      @foreach($dtChunk as $dt)
      <div class="col-lg-4">
        @if(\App::getLocale() == 'id')
        <a class="anews" href="{{ url('/portal/'.$dt->slug) }}" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(0,0,0, 1)),url({{ asset('assets/front/img/blogs/'.$dt->main_image) }});width: 100%;height: 423px;">
        @else
        <a class="anews" href="{{ url('/en/portal/'.$dt->slug) }}" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(0,0,0, 1)),url({{ asset('assets/front/img/blogs/'.$dt->main_image) }});">
        @endif
          <div class="image"></div>
          
          <!-- <div style="background: linear-gradient(168deg, rgba(159,144,144,0) 0%, rgba(231,224,224,1) 92%);"> -->
            
            <div class="date">
              <h3 class="bigs" style="color: white;text-shadow: 2px 2px black;font-size: 70px;font-weight: 800;line-height: 38px;">{{ date('d',strtotime($dt->created_at)) }}</h3>
              <!-- <p style="font-size: 70px;font-weight: 800;line-height: 38px;">{{ date('d',strtotime($dt->created_at)) }}</p> -->

              <span class="little" style="color: white;text-shadow: 2px 2px black;">{{ date('F Y',strtotime($dt->created_at)) }}</span>
            </div>
            <div class="category" style="color: white;text-shadow: 2px 2px black;">{{ $dt->bcategory->name }}</div>
            
            @if(\App::getLocale() == 'id')
            <h2 class="title" style="color: white;">{{ Str::limit($dt->title,68) }}</h2>
            @else
            <h2 class="title" style="color: white;">{{ Str::limit($dt->title_en,68) }}</h2>
            @endif
              
          <!-- </div> -->

        </a>
      </div>
      @endforeach
      <!-- anews -->
    </div> <!-- rows end -->
    @endforeach
    
  </div>

</section>

@endsection