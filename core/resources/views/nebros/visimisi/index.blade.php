@extends('nebros.index')

@section('content')

<style type="text/css">
  
/*@media screen and (min-width: 768px)
.myjumbo-aboutComp {
    padding-top: 48px;
    padding-bottom: 48px;
}

.myjumbo-aboutComp {
    padding: 30px;
    margin-bottom: 30px;
    font-size: 14px;
    line-height: 2.1428571435;
    color: #fff;
    background: url(http://www.nasionalre.co.id/assets/img/bg-web-ttgperus3.jpg) no-repeat center center;
    background-size: cover;
}

.myjumbo-aboutComp h1 {
    font-size: 63px;
}

.myjumbo-aboutComp h1 {
    line-height: 1;
    color: inherit;
}
.text-left {
    text-align: left;
}*/


#timeline {
  list-style: none;
  position: relative;
}
#timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 2px;
  background-color: #4997cd;
  left: 50%;
  margin-left: -1.5px;
}
#timeline .clearFix {
  clear: both;
  height: 0;
}
#timeline .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  font-size: 1.2em;
  text-align: center;
  position: absolute;
  top: 20px;
  left: 50%;
  margin-left: -25px;
  background-color: #4997cd;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
#timeline .timeline-badge span.timeline-balloon-date-day {
  font-size: 1.4em;
}
#timeline .timeline-badge span.timeline-balloon-date-month {
  font-size: .7em;
  position: relative;
  top: -10px;
}
#timeline .timeline-badge.timeline-filter-movement {
  background-color: #ffffff;
  font-size: 1.7em;
  height: 35px;
  margin-left: -18px;
  width: 35px;
  top: 40px;
}
#timeline .timeline-badge.timeline-filter-movement a span {
  color: #4997cd;
  font-size: 1.3em;
  top: -1px;
}
#timeline .timeline-badge.timeline-future-movement {
  background-color: #ffffff;
  height: 35px;
  width: 35px;
  font-size: 1.7em;
  top: -16px;
  margin-left: -18px;
}
#timeline .timeline-badge.timeline-future-movement a span {
  color: #4997cd;
  font-size: .9em;
  top: 2px;
  left: 1px;
}
#timeline .timeline-movement {
  border-bottom: dashed 1px #4997cd;
  position: relative;
}
#timeline .timeline-movement.timeline-movement-top {
  height: 60px;
}
#timeline .timeline-movement .timeline-item {
  padding: 20px 0;
}
#timeline .timeline-movement .timeline-item .timeline-panel {
  border: 1px solid #d4d4d4;
  border-radius: 3px;
  background-color: #FFFFFF;
  color: #666;
  padding: 10px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
#timeline .timeline-movement .timeline-item .timeline-panel .timeline-panel-ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
#timeline .timeline-movement .timeline-item .timeline-panel.credits .timeline-panel-ul {
  text-align: right;
}
#timeline .timeline-movement .timeline-item .timeline-panel.credits .timeline-panel-ul li {
  color: #666;
}
#timeline .timeline-movement .timeline-item .timeline-panel.credits .timeline-panel-ul li span.importo {
  color: #468c1f;
  font-size: 1.3em;
}
#timeline .timeline-movement .timeline-item .timeline-panel.debits .timeline-panel-ul {
  text-align: left;
}
#timeline .timeline-movement .timeline-item .timeline-panel.debits .timeline-panel-ul span.importo {
  color: #e2001a;
  font-size: 1.3em;
}

</style>

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

<section id="about" class="about">
<div class="container wow fadeInUp">
  <div class="row">
    <div class="col-lg-12 image">
      <figure>
        <!-- <img src="https://i.imgur.com/iEv7eOI.jpg" style="width: 20%;"> -->
      </figure>

    </div>
    <!-- Left Side -->
    <div class="col-lg-12 text box-animation">
      <div class="section-title bottom_15 top_30">
        @if(\App::getLocale() == 'id')
        <h2 class="title">{{ $dt->title }}</h2>
        @else
        <h2 class="title">{{ $dt->title_en }}</h2>
        @endif
        <!-- <span>who we are</span> -->
      </div>
      <p style="display: inline-block; text-align: justify;">

        @if(\App::getLocale() == 'id')
        {!! $dt->body !!}
        @else
        {!! $dt->body_en !!}
        @endif

</p>
      <!-- <a href="#portfolio" class="site-btn top_30">SEE PORTFOLIO</a> -->
    </div>
    <!-- Right Side -->
    
  </div> <!-- row end -->




  <!-- <div class="hero" id="hero"> -->
    
    <!-- <section id="portfolio" class="portfolio graybg" style="padding-top: 10px;"> -->
    


    
      

    
    <!-- </section> -->

  <!-- </div> -->




</div> <!-- container end -->
</section>

@endsection