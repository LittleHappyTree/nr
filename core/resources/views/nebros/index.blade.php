<!DOCTYPE html>
<html lang="en">
<head>  
@include('nebros.layouts.head')

<style type="text/css">

  header{
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 0px;
  }

  .text-berjalan{
    position: absolute;
    width: 100%;
    z-index: 2;
    /*padding: 30px;*/
    z-index: 100;
  }

</style>
     
</head> 
<body> 

  <!-- PRELOADER -->
<div id="preloader">
    <div class="loading-area">
      <div class="logo"><img src="{{asset('assets/front/img/logo.png')}}" alt=""></div>
      <span>loading...</span>
    </div>
    <div class="left-side"></div>
    <div class="right-side"></div>
  </div>

<!-- HEADER 
==================================================-->
<!-- teks marque -->
<?php
        $cek_marq = \App\Models\Marquee_client::whereDay('tanggal',date('d'))->whereMonth('tanggal',date('m'))->count();

        if($cek_marq > 0){
          $marq = \App\Models\Marquee_client::whereDay('tanggal',date('d'))->whereMonth('tanggal',date('m'))->get();
          $mq = \App\Models\Marquee::first();
        }
      ?>

      @if($cek_marq > 0)
      <div class="text-berjalan">
        <p style="font-size: 12px;margin-bottom: 0px;color: white; font-weight: bold;">
          <marquee>
            <b><i>{{ $mq->keterangan }} </i></b>
            @foreach($marq as $cl)
            <b><i>{{ $cl->nama }}, </i></b>
            @endforeach
          </marquee>
        </p>
      </div>
      @endif

<header id="header-utama" style="padding-top: 0px;
    padding-bottom: 0px;">
  <!-- Logo -->
  @include('nebros.layouts.header')
</header>

<div class="wrapper">

<!-- SLIDER 
==================================================-->
@if(Request::path() == '/' || Request::path() == 'en')
  <div class="hero" id="hero">
  <!-- Swiper -->
  @include('nebros.layouts.slider')
</div>
@endif

<!-- CONTENT 
==================================================-->
@yield('content')

<!-- ABOUT 
==================================================-->
<section id="about" class="about">
@include('nebros.layouts.footer')
</section>

<!-- SERVICES 
==================================================-->


<!-- TESTIMONIALS 
==================================================-->


<!-- PORTFOLIO 
================================================== --> 


<!-- NEWSLETTER 
================================================== --> 


<!-- OUR NEWS 
================================================== --> 


<!-- CONTACT
================================================== --> 


</div>
<!-- FOOTER 
================================================== --> 
<?php
  $color_footer = \DB::table('m_color')->where('key','footer')->first();
?>

<footer style="background: {{ $color_footer->color }};">
  <div class="container">
    <div class="row">
      <!-- Copyright -->
      <div class="col-lg-12">
        <center>
          <p class="text-center">
                                     <a style="color: white;" href="#" class="foot-hov">Sitemap</a> |
                                     <a style="color: white;" href="#" class="foot-hov">Kebijakan Pribadi</a> |
                                     <a style="color: white;" href="#" class="foot-hov">Pemberitahuan Hukum</a>
              </p>
              <p class="text-center" style="color: white;">© 2020 PT. Reasuransi Nasional Indonesia. All Rights Reserved</p>
        </center>
      </div>

    </div>
  </div>
</footer>

@yield('modals')

<!-- modal produk -->
<div class="modal fade right modal-produk" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">{{ __("header.produk") }}</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
              ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione
              fuga, enim, ab officiis totam.</p> -->
          </div>
          <p>
            <h4><b><i>{{ __("header.produks.reasuransi_konvensional") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'en') ? url('/en/reasum') : url('/reasum') }}"><b><i>{{ __("header.produks.reasuransi_umum") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/reasji') : url('/en/reasji') }}"><b><i>{{ __("header.produks.reasuransi_jiwa") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">2</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>{{ __("header.produks.reasuransi_syariah") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/reassya') : url('/en/reassya') }}"><b><i>{{ __("header.produks.reasuransi_syariah") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <!-- <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1 text-white"></i>
          </a> -->
          <!-- <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a> -->
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Full Height Modal Right Success-->
<!-- Central Modal Medium Success-->

<!-- modal publikasi -->
<div class="modal fade right modal-publikasi" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">{{ __("header.publikasi") }}</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
              ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione
              fuga, enim, ab officiis totam.</p> -->
          </div>
          <p>
            <h4><b><i>{{ __("header.publikasis.artikel") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('portal') : url('/en/portal') }}"><b><i>{{ __("header.publikasis.berita") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>{{ __("header.publikasis.kepustakaan") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>{{ __("header.publikasis.peraturan_peraturan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>{{ __("header.publikasi") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('laporan-tahunan') : url('/en/laporan-tahunan') }}"><b><i>{{ __("header.publikasis.laporan_tahunan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('ikhtisar-keuangan') : url('/en/ikhtisar-keuangan') }}"><b><i>{{ __("header.publikasis.ikhtisar_keuangan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('pedoman-perusahaan') : url('/en/pedoman-perusahaan') }}"><b><i>{{ __("header.publikasis.pedoman") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('rating') : url('/en/rating') }}"><b><i>{{ __("header.publikasis.rating") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('penghargaan') : url('/en/penghargaan') }}"><b><i>{{ __("header.publikasis.penghargaan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>Kegiatan</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('csr-publikasi') : url('/en/gallery/kat/csr') }}"><b><i>{{ __("header.publikasis.csr") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('gallery-publikasi') : url('/en/gallery/kat/gallery') }}"><b><i>{{ __("header.publikasis.galeri_kegiatan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('diklat-publikasi') : url('/en/gallery/kat/diklat') }}"><b><i>{{ __("header.publikasis.diklat") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('video') : url('/en/video') }}"><b><i>{{ __("header.publikasis.video") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <!-- <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1 text-white"></i>
          </a> -->
          <!-- <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a> -->
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>

<!-- modal tentang kami -->
<div class="modal fade right modal-tentang-kami" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">{{ __("header.tentang_kami") }}</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
              ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione
              fuga, enim, ab officiis totam.</p> -->
          </div>
          <p>
            <h4><b><i>{{ __("header.tentang_kamis.perusahaan") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/profile-perusahaan') : url('/en/profile-perusahaan') }}"><b><i>{{ __("header.tentang_kamis.profil_perusahaan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/visi-misi') : url('/en/visi-misi') }}"><b><i>{{ __("header.tentang_kamis.visi_misi") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">2</span> -->
            </li>
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/maksud-tujuan') : url('/en/maksud-tujuan') }}"><b><i>{{ __("header.tentang_kamis.maksud_dan_tujuan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">2</span> -->
            </li>
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/riwayat-perusahaan') : url('/en/riwayat-perusahaan') }}"><b><i>{{ __("header.tentang_kamis.riwayat_perusahaan") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">2</span> -->
            </li>
          </ul>

          

          <p>
            <h4><b><i>{{ __("header.tentang_kamis.management") }}</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/dewan-komisaris') : url('/en/dewan-komisaris') }}"><b><i>{{ __("header.tentang_kamis.dewan_komisaris") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>

            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/dewan-pengawas-syariah') : url('/en/dewan-pengawas-syariah') }}"><b><i>{{ __("header.tentang_kamis.dewan_pengawas") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>

            <li class="list-group-item justify-content-between">
              <a href="{{ (App::getLocale() == 'id') ? url('/direksi') : url('/en/direksi') }}"><b><i>{{ __("header.tentang_kamis.direksi") }}</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <!-- <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1 text-white"></i>
          </a> -->
          <!-- <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a> -->
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>

  <!-- modal menu -->
<div class="modal fade right modal-menu" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">{{ __("header.produk") }}</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
              ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione
              fuga, enim, ab officiis totam.</p> -->
          </div>
          

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <!-- <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1 text-white"></i>
          </a> -->
          <!-- <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a> -->
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- Full Height Modal Right Success-->

@if(Request::path() == '/' || Request::path() == 'en')
  <!-- modal ig -->
<div class="modal fade right modal-ig" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Feed Instagram</p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <!-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
              ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione
              fuga, enim, ab officiis totam.</p> -->
          </div>
          
          @if($feed_ig != null)
          @foreach($feed_ig as $fi)
          <center>
            <img src="{{ $fi['photo'] }}" style="width: 50%;height: 50%;padding-bottom: 20px;">
          </center>
          <div>
            @if(isset($fi['caption']))
            <p style="font-weight: 500; font-size: 12px; line-height: 1.5; margin-bottom: 0px;">{!! $fi['caption'] !!}</p>
            @else
            <p style="font-weight: 500; font-size: 12px; line-height: 1.5; margin-bottom: 0px;"></p>
            @endif
          </div>
          <br>
          <i class="far fa-heart" style="color: #303761"></i> {{ $fi['total_like'] }}</i><i class="far fa-comments" style="color: #303761; padding-left: 15px;"></i> {{ $fi['total_komen'] }}</i>
          <hr>
          @endforeach
          @endif

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <!-- <a type="button" class="btn btn-success">Get it now
            <i class="far fa-gem ml-1 text-white"></i>
          </a> -->
          <!-- <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a> -->
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
@endif

<div class="modal fade" id="modal-lang" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
 
          <div class="modal-header">
            @if(App::getLocale() == 'en')
            <h6 class="modal-title" id="modal-title-notification">Select Language</h6>
            @else
            <h6 class="modal-title" id="modal-title-notification">Pilih Bahasa</h6>
            @endif
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
 
          <div class="modal-body">
 
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  @if(\App::getLocale() == 'id')
                  <tr>
                    <td>
                      <center>
                        <?php
                          $urlnya = Request::path();
                        ?>
                        <a href="{{ url($urlnya) }}">Indonesian</a>
                      </center>
                    </td>
                    <td>
                      <center>
                        <a href="{{ url('en/'.$urlnya) }}">English</a>
                      </center>
                    </td>
                  </tr>
                  @else
                  <tr>
                    <td>
                      <center>
                        <?php
                          $urlnya = Request::path();

                          $url_baru = str_replace('en/', '', $urlnya);
                        ?>
                        <a href="{{ url($url_baru) }}">Indonesian</a>
                      </center>
                    </td>
                    <td>
                      <center>
                        <a href="{{ url('en'.$url_baru) }}">English</a>
                      </center>
                    </td>
                  </tr>
                  @endif

                </tbody>
              </table>
            </div>
 
          </div>
 
          <div class="modal-footer">
            
          </div>
 
        </div>
      </div>
    </div>

<!-- Javascripts -->
@include('nebros.layouts.scripts')

@yield('scripts')

<script type="text/javascript">
  $(document).ready(function(){

    // $('.modal-ig').modal();

    $('.btn-ig').click(function(e){
      e.preventDefault();
      $('.modal-ig').modal();
    })

    $('body').on('click','.btn-menu',function(e){
      e.preventDefault();
      $('.modal-menu').find('.modal-body').empty();
      var id = $(this).attr('menu-id');
      var url = "{{ url('/get-sub-menu') }}"+'/'+id;

      $.ajax({
        type:'get',
        dataType:'json',
        url:url,
        success:function(data){
          var hasil = '';
          $.each(data.data,function(i,v){
            console.log(v);
            hasil += '<p><h4><b><i>'+v.nama+'</i></b></h4></p>';

            hasil += '<ul>';

            $.each(v.childs,function(a,b){
              hasil += '<li class="list-group-item justify-content-between"><a href=""><b><i>'+b.nama+'</i></b></a></li>'
            })

            hasil += '</ul>';

          })

          $('.modal-menu').find('.modal-body').append(hasil);
        }
      })

      $('.modal-menu').modal();
    })

  })
</script>

</body>
</html>