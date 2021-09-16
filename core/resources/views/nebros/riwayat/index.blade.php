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
        <h2 class="title">{{ $title }}</h2>
        <!-- <span>who we are</span> -->
      </div>
      <p style="display: inline-block; text-align: justify;">

        




        


        <div class="row">
                                <div class="col-lg-4">
                                  <h4>Premi Bruto</h4>
                                  <div id="myfirstchart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="360" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.859375" y="303" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.359375,303H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.859375" y="233.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.359375,233.5H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.859375" y="164" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.359375,164H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.859375" y="94.49999999999997" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.9999999999999716" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.359375,94.49999999999997H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.859375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">4,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.359375,25H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="335" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="241.82900216795986" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="148.53037283204017" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="55.359375" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><path fill="none" stroke="#0b62a4" d="M55.359375,264.08C67.00574972900502,263.90625,90.29849918701507,263.55875,101.94487391602009,263.385C113.5912486450251,263.21125,136.88399810303514,266.425625,148.53037283204017,262.69C160.1767475610452,258.954375,183.4694970190552,239.74644322845418,195.11587174806024,233.5C206.79415435303514,227.23644322845416,230.15071956298496,223.52423050615593,241.82900216795986,212.64999999999998C253.47537689696486,201.80548050615593,276.7681263549749,165.0425,288.4145010839799,146.625C300.06087581298493,128.2075,323.353625270995,85.63874999999999,335,65.30999999999997" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="55.359375" cy="264.08" r="7" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="101.94487391602009" cy="263.385" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="148.53037283204017" cy="262.69" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="195.11587174806024" cy="233.5" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.82900216795986" cy="212.64999999999998" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="288.4145010839799" cy="146.625" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="335" cy="65.30999999999997" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 1.85938px; top: 197px;"><div class="morris-hover-row-label">2009</div><div class="morris-hover-point" style="color: #0b62a4">
  Pendapatan:
  560
</div></div></div>
                                  <script>
                                      new Morris.Line({
                                        // ID of the element in which to draw the chart.
                                        element: 'myfirstchart',
                                        // Chart data records -- each entry in this array corresponds to a point on
                                        // the chart.
                                        data: [
                                          { year: '2009', value: 560 },
                                          { year: '2010', value: 570 },
                                          { year: '2011', value: 580 },
                                          { year: '2012', value: 1000 },
                                          { year: '2013', value: 1300 },
                                          { year: '2014', value: 2250 },
                                          { year: '2015', value: 3420 }
                                        ],
                                        // The name of the data record <attribute></attribute> that contains x-values.
                                        xkey: 'year',
                                        // A list of names of data record attributes that contain y-values.
                                        ykeys: ['value'],
                                        // Labels for the ykeys -- will be displayed when you hover over the
                                        // chart.
                                        labels: ['Pendapatan']
                                      });
                                  </script>
                                </div>
                                <div class="col-lg-4">
                                  <h4>Hasil Underwriting</h4>
                                  <div id="mychart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="360" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.859375" y="303" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,303H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="233.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,233.5H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="164" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,164H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="94.50000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,94.50000000000003H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,25H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="335" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="238.4971902099498" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="141.8621847900502" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.359375" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><path fill="none" stroke="#0b62a4" d="M45.359375,275.2C57.422226223756276,269.9875,81.54792867126883,259.04125,93.6107798950251,254.35C105.67363111878137,249.65875,129.79933356629394,240.27625,141.8621847900502,237.67000000000002C153.92503601380648,235.06375000000003,178.05073846131904,235.75566005471956,190.1135896850753,233.5C202.20948981629394,231.23816005471957,226.40129007873117,231.77913816689468,238.4971902099498,219.60000000000002C250.5600414337061,207.4541381668947,274.6857438812186,160.52500000000003,286.7485951049749,136.20000000000002C298.8114463287312,111.87500000000003,322.9371487762437,52.800000000000004,335,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.359375" cy="275.2" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="93.6107798950251" cy="254.35" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="141.8621847900502" cy="237.67000000000002" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="190.1135896850753" cy="233.5" r="7" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="238.4971902099498" cy="219.60000000000002" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="286.7485951049749" cy="136.20000000000002" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="335" cy="25" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 139.614px; top: 166px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #0b62a4">
  Pendapatan:
  50
</div></div></div>
                                  <script>
                                      new Morris.Line({
                                        // ID of the element in which to draw the chart.
                                        element: 'mychart',
                                        // Chart data records -- each entry in this array corresponds to a point on
                                        // the chart.
                                        data: [
                                          { year: '2009', value: 20 },
                                          { year: '2010', value: 35 },
                                          { year: '2011', value: 47 },
                                          { year: '2012', value: 50 },
                                          { year: '2013', value: 60 },
                                          { year: '2014', value: 120 },
                                          { year: '2015', value: 200 }
                                        ],
                                        // The name of the data record <attribute></attribute> that contains x-values.
                                        xkey: 'year',
                                        // A list of names of data record attributes that contain y-values.
                                        ykeys: ['value'],
                                        // Labels for the ykeys -- will be displayed when you hover over the
                                        // chart.
                                        labels: ['Pendapatan']
                                      });
                                  </script>
                                </div>
                                <div class="col-lg-4">
                                  <h4>Laba (Rugi)</h4>
                                  <div id="labarugi" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="360" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.859375" y="303" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,303H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="233.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,233.5H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="164" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,164H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="94.50000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,94.50000000000003H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.859375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M45.359375,25H335" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="335" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="238.4971902099498" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="141.8621847900502" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.359375" y="315.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><path fill="none" stroke="#0b62a4" d="M45.359375,289.1C57.422226223756276,288.40500000000003,81.54792867126883,288.57875,93.6107798950251,286.32C105.67363111878137,284.06125,129.79933356629394,277.11125,141.8621847900502,271.03C153.92503601380648,264.94874999999996,178.05073846131904,246.69264021887827,190.1135896850753,237.67000000000002C202.20948981629394,228.62264021887827,226.40129007873117,214.93085499316004,238.4971902099498,198.75C250.5600414337061,182.61335499316004,274.6857438812186,130.11875000000003,286.7485951049749,108.4C298.8114463287312,86.68125000000002,322.9371487762437,45.85,335,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.359375" cy="289.1" r="7" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="93.6107798950251" cy="286.32" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="141.8621847900502" cy="271.03" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="190.1135896850753" cy="237.67000000000002" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="238.4971902099498" cy="198.75" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="286.7485951049749" cy="108.4" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="335" cy="25" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 0px; top: 222px;"><div class="morris-hover-row-label">2009</div><div class="morris-hover-point" style="color: #0b62a4">
  Pendapatan:
  10
</div></div></div>
                                  <script>
                                      new Morris.Line({
                                        // ID of the element in which to draw the chart.
                                        element: 'labarugi',
                                        // Chart data records -- each entry in this array corresponds to a point on
                                        // the chart.
                                        data: [
                                          { year: '2009', value: 10 },
                                          { year: '2010', value: 12 },
                                          { year: '2011', value: 23 },
                                          { year: '2012', value: 47 },
                                          { year: '2013', value: 75 },
                                          { year: '2014', value: 140 },
                                          { year: '2015', value: 200 }
                                        ],
                                        // The name of the data record <attribute></attribute> that contains x-values.
                                        xkey: 'year',
                                        // A list of names of data record attributes that contain y-values.
                                        ykeys: ['value'],
                                        // Labels for the ykeys -- will be displayed when you hover over the
                                        // chart.
                                        labels: ['Pendapatan']
                                      });
                                  </script>
                                </div>
                              </div>









        

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