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
        <img src="https://i.imgur.com/iEv7eOI.jpg" style="width: 20%;">
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
    <div class="container wow fadeInUp">
      
      <h2>Riwayat Perusahaan</h2>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Reasuransi Syariah</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Modal Setor</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Modal Dasar Awal</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          
          <div class="container">
            <div class="page-header">
            <h1 id="">Reasuransi Syariah</h1>
          </div>
          <div id="timeline"><div class="row timeline-movement timeline-movement-top">
            <div class="timeline-badge timeline-future-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
            <div class="timeline-badge timeline-filter-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-time"></span>
                </a>
            </div>

        </div>
        <div class="row timeline-movement">

            <div class="timeline-badge">
                <span class="timeline-balloon-date-day"></span>
            </div>


            <div class="col-sm-6  timeline-item">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">2005</span></li>
                                <li><span class="causale">
                                  Pada tanggal 28 Oktober 2005 NASIONAL RE memulai usaha Reasuransi Syariah, hal ini dilakukan untuk menampung bisnis reasuransi dengan prinsip syariah, dimana sesuai ketentuanbahwa setiap perusahaan asuransi syariah harus menempatkan reasuransinya pada perusahaan reasuransi dengan prinsip syariah. Modal Disetor unit Reasuransi Syariah perusahaan sebesar Rp10.000.000.000 (sepuluh Milyar Rupiah) sebagaimana disebutkan pada butir 1.


                                </span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            
        </div>

        <!--due -->



        </div>
        </div>

        </div>

        <!-- slide kedua -->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          
          <div class="container">
    <div class="page-header">
    <h1 id="">Modal Setor</h1>
  </div>
  <div id="timeline"><div class="row timeline-movement timeline-movement-top">
    <div class="timeline-badge timeline-future-movement">
        <a href="#">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
    <div class="timeline-badge timeline-filter-movement">
        <a href="#">
            <span class="glyphicon glyphicon-time"></span>
        </a>
    </div>

</div>


<!--due -->

<div class="row timeline-movement">


    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <!-- <span class="timeline-balloon-date-month">APR</span> -->
    </div>

    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">1999</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO selaku Pemegang Saham Mayoritas sebesar Rp25.000.000.000 (duapuluh lima Milyar Rupiah) sehingga Modal Disetor Perusahaan menjadi Rp50.000.000.000 (limapuluh Milyar Rupiah) sesuai Akta Notaris Sutjipto, SH Nomor 47 tanggal 10 November 1999, dengan pengesahan Departemen Kehakiman RI Nomor: C-3388 HT.01.04 tanggal 21 Februari 2000.
                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2000</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO sebesar dari Rp15.000.000.000 (limabelas Milyar Rupiah) sehingga Modal Disetor Perusahaan menjadi Rp65.000.000.000 (enampuluh lima Milyar Rupiah) sesuai Akta Notaris Sutjipto, SH Nomor 37 tanggal 16 Juni 2000, dengan pengesahan Departemen Kehakiman RI Nomor: C-00902 HT.01.04 tanggal 18 Januari 2003.


                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</div>
<div class="row timeline-movement">


    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <!-- <span class="timeline-balloon-date-month">APR</span> -->
    </div>

    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2005</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp10.000.000.000 (sepuluh Milyar Rupiah) sehingga Modal Disetor dari sebelumnya Rp65.000.000.000 (enampuluh lima Milyar Rupiah) menjadi Rp75.000.000.000 (tujuhpuluh lima Milyar Rupiah) sesuai Akta Notaris Sutjipto, SH Nomor 42 tanggal 10 Agustus 2005, dengan pengesahan Departemen Kehakiman RI Nomor: C-24079 HT.01.04 Th 2005 tanggal 15 Agustus 2005.


                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2007</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp10.000.000.000 (sepuluh Milyar Rupiah) sehingga Modal Disetor Nasional Re dari sebelumnya Rp75.000.000.000 (tujuhpuluh lima Milyar Rupiah) menjadi Rp85.000.000.000 (delapan puluh lima Milyar Rupiah), sesuai Akta Notaris Sutjipto, SH Nomor 108 tanggal 22 Februari 2007, dengan pengesahan Departemen Kehakiman RI Nomor: W7-HT.01.04-4562 tanggal 15 Agustus 2007.


                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</div>

<div class="row timeline-movement">


    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <!-- <span class="timeline-balloon-date-month">APR</span> -->
    </div>

    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2011</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp53.000.000.000 (lima puluh tiga Milyar Rupiah), yang terdiri dari tanah dan gedung kantor Jl. Cikini Raya No. 99 Jakarta Pusat sebesar Rp35.000.000.000 (tiga puluh lima Milyar Rupiah) dan pengalihan dana cadangan umum sebesar Rp15.000.000.000 (lima belas Milyar Rupiah), sehingga Modal Disetor menjadi sebesar Rp138.000.000.000 (seratus tigapuluh delapan Milyar Rupiah) dari sebelumnya sebesar Rp85.000.000.000 (delapan puluh lima Milyar Rupiah), sebagaimana dicatat dalam Akta Notaris Umaran Mansjur, SH Nomor 9 tanggal 29 Juli 2011, dengan pengesahan Departemen Hukum & HAM Nomor: AHU-53290.AH.01.02 tanggal 01 November 2011. 3. Tanggal 01 November 2011 PT Reasuransi Nasional Indonesia memperoleh rating A- (A minus) dari lembaga pemeringkat PT Pemeringkat Efek Indonesia (PEFINDO).




                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2013</span></li>
                        <li><span class="causale">
                          PT Reasuransi Nasional Indonesia meluncurkan layanan terbarunya berupa layanan reasuransi jiwa berbasis web, yaitu www.e-lifere. com pada tanggal 08 Februari 2013. e-lifeRe mendapatkan penghargaan dari Museum Rekor Indonesia (MURI) sebagai layanan asuransi jiwa pertamadi Indonesia, bahkan di dunia, yang menggunakan layanan web pada tanggal 08 Februari 2013.
                          <br><br>
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp75.000.000.000 (tujuhpuluh lima Milyar Rupiah) sehingga Modal Disetor menjadi Rp213.000.000.000(dua ratus tiga belas Milyar Rupiah) sesuai Akta Notaris Hadijah, SH Nomor 9 tanggal 03 Mei 2013, dengan pengesahan Kementerian Hukum & HAM RI Nomor: AHU-AH.01.10-24996 tanggal 20 Juni 2013.
                          <br><br>
                          PT Reasuransi Nasional Indonesia memperoleh rating A dari lembaga pemeringkat PT Pemeringkat Efek Indonesia (PEFINDO).




                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</div>

<div class="row timeline-movement">


    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <!-- <span class="timeline-balloon-date-month">APR</span> -->
    </div>

    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">2014</span></li>
                        <li><span class="causale">
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp150.000.000.000 (seratus limapuluh Milyar Rupiah) berupa fresh money sehingga Modal Disetor Perusahaan menjadi Rp363.000.000.000 (tigaratus enampuluh tiga Milyar Rupiah) dari sebelumnya sebesar Rp213.000.000.000 (duaratus tigabelas Milyar Rupiah) sesuai Akta Notaris Hadijah, SH Nomor 20 tanggal 13 Oktober 2014.
                          <br><br>
                          Tanggal 03 November 2014 PT Reasuransi Nasional Indonesia memperoleh rating A (A) dari lembaga pemeringkat PT Pemeringkat Efek Indonesia (PEFINDO).
                          <br><br>
                          Penambahan Modal Disetor dari ASKRINDO sebesar Rp100.000.000.000 (seratus Milyar Rupiah) berupa fresh money sehingga Modal Disetor menjadiRp463.000.000.000 (empatratus enampuluh tiga Milyar Rupiah) dari sebelumnya Rp363.000.000.000 (tigaratus enampuluh tiga Milyar Rupiah) sesuai Akta Notaris Bambang Suprianto, SH Nomor 72 tanggal 17 Desember 2014, dengan pengesahan Kementerian Hukum & HAM RI Nomor: AHU-13005.40.20.2014 tanggal 17 Desember 2014.






                        </span> </li>
                        <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


</div>

</div>
</div>

        </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          
          <div class="container">
            <div class="page-header">
            <h1 id="">Modal Dasar Awal</h1>
          </div>
          <div id="timeline"><div class="row timeline-movement timeline-movement-top">
            <div class="timeline-badge timeline-future-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
            <div class="timeline-badge timeline-filter-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-time"></span>
                </a>
            </div>

        </div>
        <div class="row timeline-movement">

            <div class="timeline-badge">
                <span class="timeline-balloon-date-day"></span>
            </div>


            <div class="col-sm-6  timeline-item">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">1994</span></li>
                                <li><span class="causale">
                                  NASIONAL RE didirikan di Jakarta sebagai anak perusahaan dari PT (Persero) Asuransi Kredit Indonesia (ASKRINDO) yang menjalankan usahanya dalam bidang Reasuransi, dengan Modal Dasar awal sebesar Rp 100.000.000.000 (seratus Milyar Rupiah)




                                </span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-6  timeline-item">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">2011</span></li>
                                <li><span class="causale">
                                  Peningkatan Modal Dasar Perusahaan dari Rp100.000.000.000 (seratus Milyar Rupiah) menjadi Rp400.000.000.000 (empatratus Milyar Rupiah) , sesuai Akta Notaris Umaran Mansjur, SH Nomor 9 tanggal 29 Juli 2011, dengan pengesahan Departemen Departemen Hukum & HAM RI Nomor AHU-53290.AH.01.02 tanggal 01 November 2011.




                                </span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-6  timeline-item">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">2013</span></li>
                                <li><span class="causale">
                                  PT Reasuransi Nasional Indonesia meluncurkan layanan terbarunya berupa layanan reasuransi jiwa berbasis web, yaitu www.e-lifere. com pada tanggal 08 Februari 2013. e-lifeRe mendapatkan penghargaan dari Museum Rekor Indonesia (MURI) sebagai layanan asuransi jiwa pertamadi Indonesia, bahkan di dunia, yang menggunakan layanan web pada tanggal 08 Februari 2013.
                                  <br><br>
                                  PT Reasuransi Nasional Indonesia memperoleh rating A dari lembaga pemeringkat PT Pemeringkat Efek Indonesia (PEFINDO).






                                </span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-6  timeline-item">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="timeline-panel credits">
                            <ul class="timeline-panel-ul">
                                <li><span class="importo">2014</span></li>
                                <li><span class="causale">
                                  Tanggal 03 November 2014 PT Reasuransi Nasional Indonesia memperoleh rating A (A) dari lembaga pemeringkat PT Pemeringkat Efek Indonesia (PEFINDO).
                                  <br><br>
                                  Peningkatan Modal Dasar perusahaan dari Rp400.000.000.000 (empatratus Milyar Rupiah) menjadi Rp1.800.000.000.000 (satutrilyun delapanratus Milyar Rupiah) sesuai Akta Notaris Bambang Suprianto, SH Nomor 72 tanggal 17 Desember 2014, dengan pengesahan Kementerian Hukum & HAM RI Nomor: AHU-13005.40.20.2014 tanggal 17 Desember 2014.






                                </span> </li>
                                <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/09/2014</small></p> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            
        </div>

        <!--due -->



        </div>
        </div>

        </div>
      </div>
      

    </div> <!-- container end -->
    <!-- </section> -->

  <!-- </div> -->




</div> <!-- container end -->
</section>

@endsection