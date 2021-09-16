@extends('nebros.index')

@section('content')

<style type="text/css">

.anews .title {
    font-weight: 600;
    letter-spacing: -1px;
    font-size: 26px;
    line-height: 32px;
}

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

  @if(count($data))
  <div class="container wow fadeInUp">
    <div class="section-title bottom_15 top_30">
      <h2 class="title">News Corporate Values.</h2>
    </div>
          
  </div>



  <!-- end featured posts -->

  <div class="container">
    @foreach($data->chunk(3) as $dtChunk)
    <div  class="row">
      <!-- anews -->
      @foreach($dtChunk as $dt)
      <div class="col-lg-4">
        <a class="anews" href="{{ url('/portal/'.$dt->slug) }}" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(0,0,0, 1)),url({{ asset('assets/front/img/blogs/'.$dt->main_image) }});">
          <div class="image"></div>
          
          <!-- <div style="background: linear-gradient(168deg, rgba(159,144,144,0) 0%, rgba(231,224,224,1) 92%);"> -->
            
            <div class="date">
              <h3 class="big" style="color: white;text-shadow: 2px 2px black;">{{ date('d',strtotime($dt->created_at)) }}</h3>

              <span class="little" style="color: white;text-shadow: 2px 2px black;">{{ date('F Y',strtotime($dt->created_at)) }}</span>
            </div>
            <div class="category" style="color: white;text-shadow: 2px 2px black;">{{ $dt->bcategory->name }}</div>
            <h2 class="title" style="color: white;">{{ Str::limit($dt->title,68) }}</h2>
              
          <!-- </div> -->

        </a>
      </div>
      @endforeach
      <!-- anews -->
    </div> <!-- rows end -->
    @endforeach
    
  </div>
  @endif

  @if(count($gallery))
  <div class="container wow fadeInUp">
    <div class="section-title bottom_15 top_30">
      <h2 class="title">Gallery Corporate Values.</h2>
    </div>
          
  </div>

  <div class="container">
    @foreach($gallery->chunk(3) as $dtChunk)
    <div  class="row">
      <!-- anews -->
      @foreach($dtChunk as $dt)
      <div class="col-lg-4">
        <a class="anews" href="{{ url('/gallery/'.$dt->id) }}" style="background:linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(0,0,0, 1)),url({{ asset('gallery_images/'.$dt->photos_one->photo) }});background-size: 100%;width: 100%;">
          <div class="image" style="width: 100%;"></div>
          
          <!-- <div style="background: linear-gradient(168deg, rgba(159,144,144,0) 0%, rgba(231,224,224,1) 92%);"> -->
            
            <div class="date">
              <h3 class="big" style="color: white;text-shadow: 2px 2px black;">{{ date('d',strtotime($dt->created_at)) }}</h3>

              <span class="little" style="color: white;text-shadow: 2px 2px black;">{{ date('F Y',strtotime($dt->created_at)) }}</span>
            </div>
            
            <h2 class="title" style="color: white;">{{ Str::limit($dt->judul,68) }}</h2>
              
          <!-- </div> -->

        </a>
      </div>
      @endforeach
      <!-- anews -->
    </div> <!-- rows end -->
    @endforeach
    
  </div>
  @endif

  <!-- videos -->
  @if(count($videos))
  <div class="container wow fadeInUp">
    <div class="section-title bottom_15 top_30">
      <h2 class="title">Video Corporate Values.</h2>
    </div>
          
  </div>

  <div class="container">
    
    <div class="row masonry clearfix">
          <!-- a work -->
          @foreach($videos as $dt)
          <a href="{{ $dt->url }}" class="col-lg-4 col-sm-6 grid-item photography video-icon">
            <figure class="portfolio-item">                       
                  <img src="https://img.youtube.com/vi/{{$dt->id_yt}}/hqdefault.jpg" alt="" />
              <figcaption>
                  <h3 class="title" style=" line-height: 1;">{{ $dt->judul }}</h3>
                  <!-- <span>Website </span> -->
              </figcaption>  
            </figure>
          </a>
          @endforeach
          <!-- a work -->
      </div>
    
  </div>
  @endif

</section>

@endsection