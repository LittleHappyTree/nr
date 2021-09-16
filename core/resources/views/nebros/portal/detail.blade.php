@extends('nebros.index')

@section('content')

<meta name="keywords" content="{{ $dt->meta_keywords }}">
<meta name="description" content="{{ $dt->meta_description }}">

<style type="text/css">
element.style {
    margin-left: 50px;
    margin-right: 50px;
}

 .mb-2, .my-2 {
    margin-bottom: .5rem!important;
}
</style>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

<section class="subpage">
  <div class="container">
    <article class="news-article">
        <figure class="article-image bottom_30">
            <center>
              <img src="{{ asset('assets/front/img/blogs/'.$dt->main_image) }}" alt="" style="width: 50%;">
            </center>
        </figure>
        <small class="category">{{ $dt->bcategory->name }}</small>
        @if(\App::getLocale() == 'id')
        <h1 class="title">{{ $dt->title }} </h1>
        @else
        <h1 class="title">{{ $dt->title_en }} </h1>
        @endif
        <div class="information bottom_30"><span>{{ date('d F Y',strtotime($dt->created_at)) }}</span></div>
        
        @if(\App::getLocale() == 'id')
        <p>{!! $dt->content !!}</p>
        @else
        <p>{!! $dt->content_en !!}</p>
        @endif

     <!-- AddToAny BEGIN -->
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="{{ url('/').Request::path() }}" data-a2a-title="nrecms">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<!-- AddToAny END -->

    </article>

     <!-- COMMENTS -->

  </div>
</section>
<!-- 
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('assets/js/share.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"></script> -->

@endsection