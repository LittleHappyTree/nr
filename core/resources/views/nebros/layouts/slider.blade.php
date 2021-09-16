<style type="text/css">
  .slider-content span:before, .site-btn, .section-title:before, .swiper-pagination-bullet-active {
    background:#176ab4;
  }

  .swiper-slide:before {
    background: rgba(0, 0, 0, 0.15);
  }
</style>

<div class="swiper-container carousel">
    <div class="swiper-wrapper">
      <!-- a slide -->
      @foreach($banner as $bn)
      <div class="swiper-slide" style="background-image:url({{ asset('banners/'.$bn->photo) }});width: 100%;">

        @if($bn->is_text == 1)
        <div class="slider-content">
          <span style="text-shadow: 2px 2px black;">{{ $bn->nama_kecil }}</span>
          <h1 style="text-shadow: 2px 2px black;">{{ Str::limit($bn->nama_besar,20) }}</h1>
          @if(\App::getLocale() == 'id')

            @if($bn->is_utama == 1)
              <a href="{{ url('portal/banner/cvalue') }}" class="site-btn top_30 btn-see-more" style="background:#176ab4;">SEE MORE</a>
            @else
              <a href="{{ $bn->link }}" class="site-btn top_30 btn-see-more" style="background:#176ab4;">SEE MORE</a>
            @endif

          @else
            
            @if($bn->is_utama == 1)
              <a href="{{ url('en/portal/banner/cvalue') }}" class="site-btn top_30 btn-see-more" style="background:#176ab4;">SEE MORE</a>
            @else
              <a href="{{ 'en/'.$bn->link }}" class="site-btn top_30 btn-see-more" style="background:#176ab4;">SEE MORE</a>
            @endif

          @endif
        </div>
        @endif
        
      </div>
      @endforeach

    </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
  </div> <!-- Swiper Container end -->
  <!-- Social Links -->
  <div class="social">
      <a href="#" class="btn-ig"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
  </div>