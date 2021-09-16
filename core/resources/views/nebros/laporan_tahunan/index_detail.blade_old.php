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
    <!-- Left Side -->
    <div class="col-lg-12 text box-animation">
      <div class="section-title bottom_15 top_30">
        <h2 class="title">Laporan Tahunan</h2>
        <!-- <span>who we are</span> -->
        
      </div>
      
      <!-- <a href="#portfolio" class="site-btn top_30">SEE PORTFOLIO</a> -->
    </div>
    <!-- Right Side -->
    
  </div> <!-- row end -->


  <div class="row">
    <div class="col-md-4">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2018 - 2014</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2018_20190904-145909.pdf" target="_blank">Laporan Tahunan 2018</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2017_20181102-110418.pdf" target="_blank">Laporan Tahunan 2017</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2016_20170704-114057.pdf" target="_blank">Laporan Tahunan 2016</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2015_20160630-114057.pdf" target="_blank">Laporan Tahunan 2015</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2014_Syariah_20160218-181346.pdf" target="_blank">Laporan Tahunan 2014 Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2014_20160218-181308.pdf" target="_blank">Laporan Tahunan 2014</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="col-md-4">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2013 - 2009</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2013_Syariah_20160218-181226.pdf" target="_blank">Laporan Tahunan 2013 syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2013_20160218-181153.pdf" target="_blank">Laporan Tahunan 2013</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2012_Syariah_20160218-181115.pdf" target="_blank">Laporan Tahunan 2012 Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2012_20160218-181031.pdf" target="_blank">Laporan Tahunan 2012</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2011_Syariah_20160218-180921.pdf" target="_blank">Laporan Tahunan 2011 Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2011_20160218-180817.pdf" target="_blank">Laporan Tahunan 2011</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2010_20160218-180739.pdf" target="_blank">Laporan Tahunan 2010</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2009_20160218-180659.pdf" target="_blank">Laporan Tahunan 2009</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="col-md-4">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2008 - 2005</i></b><th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2008_20160218-180610.pdf" target="_blank">Laporan Tahunan 2008</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2007_20160218-180546.pdf" target="_blank">Laporan Tahunan 2007</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2006_20160218-180347.pdf" target="_blank">Laporan Tahunan 2006</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LT_Laporan_Tahunan_2005_20160218-180258.pdf" target="_blank">Laporan Tahunan 2005</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>




  <!-- Laporan Triwulan -->
  <div class="row">
    <!-- Left Side -->
    <div class="col-lg-12 text box-animation">
      <div class="section-title bottom_15 top_30">
        <h2 class="title">Laporan Triwulan</h2>
        <!-- <span>who we are</span> -->
      </div>
      
      <!-- <a href="#portfolio" class="site-btn top_30">SEE PORTFOLIO</a> -->
    </div>
    <!-- Right Side -->
    
  </div> <!-- row end -->


  <div class="row">

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2011</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20160219-143801.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20160219-143832.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20160219-143919.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_Syariah_20160219-143956.pdf" target="_blank">Triwulan IV Syariah</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2012</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20160219-144019.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20160219-144054.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20160219-144120.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_Syariah_20160219-144149.pdf" target="_blank">Triwulan IV Syariah</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2013</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20160219-144340.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20160219-144358.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20160219-144424.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_20160219-144501.pdf" target="_blank">Triwulan IV</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20160829-112347.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20160829-113357.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2014</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20160219-144530.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20160219-144616.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20160219-144638.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20160219-144705.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_20160219-144741.pdf" target="_blank">Triwulan IV</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20170119-145824.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20170119-145839.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_Syariah_20170119-145858.pdf" target="_blank">Triwulan IV Syariah</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div class="row">

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2015</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20160219-144829.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20160219-144847.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20160219-144948.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20160219-145005.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20160219-145109.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20160219-145128.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_20160829-113506.pdf" target="_blank">Triwulan IV</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_Syariah_20170119-145927.pdf" target="_blank">Triwulan IV Syariah</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2016</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20160829-113559.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20160829-113610.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20161221-162637.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20170119-150135.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20170119-150432.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20170119-150446.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_20170907-114021.pdf" target="_blank">Triwulan IV</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2017</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20170907-114157.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20171127-102031.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20180430-123628.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2018</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20180430-120124.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20180802-201411.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20181127-164401.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_Syariah_20190312-174829.pdf" target="_blank">Triwulan I Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_Syariah_20190312-174846.pdf" target="_blank">Triwulan II Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_Syariah_20190429-113727.pdf" target="_blank">Triwulan III Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_Syariah_20190429-113746.pdf" target="_blank">Triwulan IV Syariah</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_IV_20190521-152743.pdf" target="_blank">Triwulan IV</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div class="row">
    <div class="col-md-3">
      <table class="table">
        <thead>
          <tr>
            <th><b><i>2019</i></b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_I_20190521-152822.pdf" target="_blank">Triwulan I</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_II_20190823-093410.pdf" target="_blank">Triwulan II</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="http://www.nasionalre.co.id/assets/docs/LTW_Triwulan_III_20191030-084045.pdf" target="_blank">Triwulan III</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <!-- <div class="hero" id="hero"> -->
    
    
    

        <!--due -->


    <!-- </section> -->

  <!-- </div> -->




</div> <!-- container end -->
</section>

@endsection