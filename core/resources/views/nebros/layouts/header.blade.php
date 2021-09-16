<?php
  $color_menubar = \DB::table('m_color')->where('key','menubar')->first();
?>
<style type="text/css">
  .logo-round {
        /* border-radius: 0px; */
      border-top-right-radius: 50px;
      border-bottom-right-radius: 50px;
      background: white;
      padding: 10px;
      width: 250px;
      height: 89px;
      padding-left: 0px;
  }

  header .logo img {
    max-height: 60px;
}

.li-header  {
  text-shadow: 1px 1px black;
}

header.fixed {

    position: fixed;
    background: {{ $color_menubar->color }};

}


</style>

<div class="logo logo-round">
    <!-- <center> -->
      <img src="{{asset('assets/front/img/logo.png')}}" alt="" style="height: 300px;">
    <!-- </center> -->
  </div>
   <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
  </div> 
  <!-- Navigation -->

  <nav style="padding-top: 30px;padding-bottom: 30px;">
    <ul class="li-header">
      <!-- @foreach(\App\Models\Menu::get() as $mn)
      <li menu-id="{{ $mn->id }}" class="{{ ($mn->has_child == 1) ? 'btn-menu' : '' }}"><a href="{{ url('nre1') }}"><span data-hover="{{ $mn->nama }}">{{ $mn->nama }}</span></a></li>
      @endforeach -->

      <li href="{{ (App::getLocale() == 'id') ? url('/') : url('/en') }}" class="btn-beranda" style="color: white;"><a href="{{ (App::getLocale() == 'id') ? url('/') : url('/en') }}"><span data-hover="{{ __('header.Beranda') }}">{{ __("header.Beranda") }}</span></a></li>

      <li class="tentang_kami"><a href="#"><span data-hover="{{ __('header.tentang_kami') }}">{{ __("header.tentang_kami") }}</span></a></li>

      <li class="produk"><a href="#services"><span data-hover="{{ __('header.produk') }}">{{ __("header.produk") }}</span></a></li>

      <li class="publikasi"><a href="#testimonials"><span data-hover="{{ __('header.publikasi') }}">{{ __("header.publikasi") }}</span></a></li>

      <li class="btn-portal"><a href="{{ (App::getLocale() == 'id') ? url('/portal') : url('/en/portal') }}"><span data-hover="{{ __('header.portal') }}">{{ __("header.portal") }}</span></a></li>

      <li class="btn-contact"><a href="{{ (App::getLocale() == 'id') ? url('contact-us') : url('/en/contact-us') }}"><span data-hover="{{ __('header.hubungi_kami') }}">{{ __("header.hubungi_kami") }}</span></a></li>

      <li class="btn-pengaduan" href="{{ (App::getLocale() == 'id') ? url('pengaduan-pelanggan') : url('/en/pengaduan-pelanggan') }}"><a href="{{ (App::getLocale() == 'id') ? url('pengaduan-pelanggan') : url('/en/pengaduan-pelanggan') }}"><span data-hover="{{ __('header.pengaduan_pelanggan') }}">{{ __("header.pengaduan_pelanggan") }}</span></a></li>

      <li class="btn-lang"><a href="{{ (App::getLocale() == 'id') ? url('pengaduan-pelanggan') : url('/en/pengaduan-pelanggan') }}"><i class="fas fa-flag-checkered"></i></a></li>

      <!-- <li>
        <a href="{{ url('/') }}"><span data-hover="Beranda">Beranda</span></a>
      </li>

      <li class="tentang_kami" style="color: white; cursor: pointer;">
        <a href=""><span data-hover="Tentang Kami">Tentang Kami</span></a>
      </li>

      <li class="produk" style="color: white; cursor: pointer;">
        <a href=""><span data-hover="Produk">Produk</span></a>
      </li>

      <li class="publikasi" style="color: white; cursor: pointer;">
        <a href=""><span data-hover="Publikasi">Publikasi</span></a>
      </li>

      <li class="btn-portal"><a href="{{ url('/portal') }}"><span data-hover="Portal">Portal</span></a></li>

      <a href="{{ url('/contact-us') }}" style="color: white;font-weight: 500;"><li class="nav-item">
        <span data-hover="Hubungi Kami">Hubungi Kami</span>
      </li></a>

      <li>
        <a href="#contact"><span data-hover="Pengaduan Pelanggan">Pengaduan Pelanggan</span></a>
      </li> -->

    </ul>
  </nav>