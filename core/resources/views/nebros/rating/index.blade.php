@extends('nebros.index')

@section('content')

<style type="text/css">

  transform-origin: 0 0;
  
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

<section id="portfolio" class="portfolio graybg">
    <div class="container wow fadeInUp">
      <div class="col-lg-12">
        <div class="section-title bottom_15 top_30">
            <h2 class="title">{{ $title }}</h2>
            <!-- <span>what the people saying about us</span> -->
        </div>
        <!-- Filter -->
        <!-- <div class="portfolio_filter">
            <ul> 
                <li><a class="select-cat" data-filter="*" href="#">All Works</a></li>
                <li><a data-filter=".webdesign" href="#">Web Design</a></li>
                <li><a data-filter=".branding" href="#">Branding</a></li>
                <li><a data-filter=".application" href="#">Application</a></li>
            </ul>   
        </div> -->
      </div>
      <!-- Portfolio -->
      <div class="row masonry clearfix">
          
          @foreach($data as $dt)
          <!-- a work -->
          <a href="{{ $dt->link }}" target="_blank" class="col-lg-4 col-sm-6 grid-item branding link-icon">
            <figure class="portfolio-item">                       
                  <img src="{{ asset($dt->photo) }}" alt="" />
              <figcaption>
                  @if(\App::getLocale() == 'id')
                  <h3 class="title">{{ $dt->nama }}</h3>
                  @else
                  <h3 class="title">{{ $dt->nama_en }}</h3>
                  @endif
                  <!-- <span> Branding </span> -->
              </figcaption> 
            </figure>
          </a>
          @endforeach
          
      </div> <!--  masonry end -->

      <!-- <div class="text-center load-more" data-wow-delay="0.2s">
        <button class="site-btn" data-tilt=""> LOAD MORE
          <i class="icon ion-md-arrow-down"></i>
        </button>
        <ul id="pagination-selector" class="portfolio-pagination list-inline d-none">
          <li class="list-inline-item">1</li>
          <li class="list-inline-item"><a href="page-2.html">2</a></li>
        </ul>
      </div> -->

    </div> <!-- container end -->
</section>

@endsection