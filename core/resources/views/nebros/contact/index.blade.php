@extends('nebros.index')

@section('content')

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

<!-- CONTACT
================================================== --> 
<section id="contact" class="contact graybg">
  <div class="container wow fadeInUp">
      <div class="section-title bottom_15 top_30 bottom_45">
          <h2 class="title">{{ $title }}</h2>
          <!-- <span>get in touch</span> -->
      </div>
      <!-- Map -->
      <div class="contact-map">
          {!! $dt->alamats->iframe !!}
      </div>

      <div class="getintouch row top_120">
          <!-- contact info -->
          <div class="col-lg-4 contact-info box-animation">
            <!-- info -->
            <div class="info">
              <i class="fas fa-paper-plane"></i>

              <a href="#">{{ $dt->emails->nama }}</a>
              <p> Email </p>
            </div>
            <!-- info -->
            <div class="info top_30">
              <i class="fas fa-map-marker-alt"></i>
              <p class="text">{{ $dt->alamats->nama }}</p>
            </div>
            <!-- info -->
            <div class="info top_30">
              <i class="fas fa-phone"></i>
              @foreach($dt->no_telps as $tp)
              <a href="#">{{ $tp->nama }}</a>
              @endforeach
              <p> Phone </p>
            </div>

            <div class="info top_30">
              <i class="fas fa-fax"></i>
              @foreach($dt->faxs as $tp)
              <a href="#">{{ $tp->nama }}</a>
              @endforeach
              <p> Fax </p>
            </div>
          </div>
          <div class="col-lg-8 contact-form box-animation">
            <!-- contact form -->
              <form class="contact-form" method="post" action="{{ url('/contact-us') }}">
                {{ csrf_field() }}
                  <div class="row">
                      <!--Name-->
                      <div class="col-md-6">
                          <input class="form-inp" type="text" placeholder="Nama" name="nama">
                      </div>
                      <!--Email-->
                      <div class="col-md-6">
                          <input class="form-inp" type="text" placeholder="Email" name="email">
                      </div>
                      <div class="col-md-12">
                          <!--Message-->
                          <textarea placeholder="How can I help you?" name="pesan" rows="7"></textarea>
                          <button id="con_submit" class="site-btn top_45 pull-right" type="submit">SUBMIT</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>

  </div> <!-- Container end -->

</section>

@endsection

@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){

    var flash = "{{ Session::has('sukses') }}";
    if(flash){
      var pesan = "{{ Session::get('sukses') }}";
      alert(pesan);
    }

  })
</script>

@endsection