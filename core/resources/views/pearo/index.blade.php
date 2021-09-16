<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        @include('pearo.layouts.head')
        
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Header Area -->
        <header class="header-area">

            <!-- Start Top Header -->
            @include('pearo.layouts.header')
            <!-- End Top Header -->

            <!-- Start Navbar Area -->
            @include('pearo.layouts.navbar')
            <!-- End Navbar Area -->

        </header>
        <!-- End Header Area -->

        <!-- Sidebar Modal -->
        @include('pearo.layouts.sidebar_modal')
        <!-- End Sidebar Modal -->

        @if(Request::path() == 'nre2')
        <!-- Start Main Banner Area -->
        @include('pearo.layouts.main_banner')
        <!-- End Main Banner Area -->
        @endif

        <div style="margin-top: 200px;">
            @yield('content')
        </div>

        <!-- ================================================================================ -->
        @if(Request::path() == 'nre2')
        <!-- Start Services Boxes Area -->
        <section class="services-boxes-area bg-f8f8f8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-box">
                            <div class="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/featured-services-image/1.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3><a href="#">Trustworthy company</a></h3>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetur gravida elit</p>

                                <div class="icon">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/icon1.png')}}" alt="image">
                                </div>
                                <div class="shape">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/umbrella.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-box">
                            <div class="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/featured-services-image/2.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3><a href="#">100% money back guarantee</a></h3>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetur gravida elit</p>
                                
                                <div class="icon">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/icon2.png')}}" alt="image">
                                </div>
                                <div class="shape">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/umbrella.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-box">
                            <div class="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/featured-services-image/3.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3><a href="#">Anytime cancellation</a></h3>
                                <p>Lorem ipsum dolor sit amet, adipiscing consectetur gravida elit</p>
                                
                                <div class="icon">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/icon3.png')}}" alt="image">
                                </div>
                                <div class="shape">
                                    <img src="{{asset('assets/pearo/pearo/assets/img/umbrella.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Boxes Area -->

        <!-- Start About Area -->
        <section class="about-area ptb-100 bg-f8f8f8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-title">
                            <span>Tentang Kami</span>
                            <h2>NASIONALRE Reinsurance</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-text">
                            <p>PT Reasuransi Nasional Indonesia, atau disingkat NASIONAL RE, didirikan berdasarkan akta Nomor 129 tanggal 22 Agustus 1994 di hadapan Sutjipto SH, Notaris di Jakarta</p>

                            <a href="#" class="read-more-btn">Selengkapnya <i class="flaticon-right-chevron"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Services Area -->
        <section class="services-area bg-f8f8f8 pb-70">
            <div class="container">
                <div class="services-slides owl-carousel owl-theme">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-home-insurance"></i>

                            <div class="icon-bg">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg1.png')}}" alt="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg2.png')}}" alt="image">
                            </div>
                        </div>

                        <h3><a href="#">Reasuransi Umum</a></h3>

                        <p>Nasional Re menyediakan kapasitas reasuransi umum konvensional kepada perusahaan asuransi umum lokal untuk asuransi harta benda, kendaraan bermotor, rangka kapal dan lain-lain baik perorangan (individu) maupun kelompok (group).</p>

                        <a href="#" class="read-more-btn">Learn More</a>

                        <div class="box-shape">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape1.png')}}" alt="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape2.png')}}" alt="image">
                        </div>
                    </div>

                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-insurance"></i>

                            <div class="icon-bg">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg1.png')}}" alt="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg2.png')}}" alt="image">
                            </div>
                        </div>

                        <h3><a href="#">Reasuransi Jiwa</a></h3>

                        <p>Reasuransi Jiwa, Kecelakaan Diri, dan Kesehatan Nasional Re menyediakan kapasitas reasuransi jiwa konvensional kepada perusahaan asuransi jiwa lokal untuk asuransi jiwa, kecelakaan diri dan kesehatan, baik perorangan (individu) maupun kelompok (group).</p>

                        <a href="#" class="read-more-btn">Learn More</a>

                        <div class="box-shape">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape1.png')}}" alt="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape2.png')}}" alt="image">
                        </div>
                    </div>

                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-health-insurance"></i>

                            <div class="icon-bg">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg1.png')}}" alt="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/icon-bg2.png')}}" alt="image">
                            </div>
                        </div>

                        <h3><a href="#">Reasuransi Syariah</a></h3>

                        <p>Dalam Reasuransi Syariah produk jasa yang ditawarkan sama dengan produk jasa Reasuransi Konvensional baik untuk Reasuransi Umum maupun Reasuransi Jiwa. Namun yang membedakan dengan Reasuransi Konvensional adalah adanya risk sharing diantara peserta, dantidak ada pelimpahan risiko dari peserta kepada perusahaan asuransi, atau dari perusahaan asuransi kepada perusahaan reasuransi.</p>

                        <a href="#" class="read-more-btn">Learn More</a>

                        <div class="box-shape">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape1.png')}}" alt="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/box-shape2.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Partner Area -->
        <section class="partner-area">
            <div class="container">
                <div class="partner-title">
                    <h2>Our trusted partners</h2>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{asset('assets/pearo/pearo/assets/img/partner-image/1.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{asset('assets/pearo/pearo/assets/img/partner-image/2.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{asset('assets/pearo/pearo/assets/img/partner-image/3.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{asset('assets/pearo/pearo/assets/img/partner-image/4.png')}}" alt="image">
                        </a>
                    </div>

                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{asset('assets/pearo/pearo/assets/img/partner-image/5.png')}}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        <!-- Start Why Choose Us Area -->
        <!-- <section class="why-choose-us-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="why-choose-us-slides owl-carousel owl-theme">
                            <div class="why-choose-us-image bg1">
                                <img src="{{asset('assets/pearo/pearo/assets/img/why-choose-img1.jpg')}}" alt="image">
                            </div>

                            <div class="why-choose-us-image bg2">
                                <img src="{{asset('assets/pearo/pearo/assets/img/why-choose-img2.jpg')}}" alt="image">
                            </div>

                            <div class="why-choose-us-image bg3">
                                <img src="{{asset('assets/pearo/pearo/assets/img/why-choose-img3.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="why-choose-us-content">
                            <div class="content">
                                <div class="title">
                                    <span class="sub-title">Your Benefits</span>
                                    <h2>Why Choose Us</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <ul class="features-list">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-like"></i>
                                        </div>
                                        <span>25 Years of experience</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-customer-service"></i>
                                        </div>
                                        <span>24/7 Support</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-care"></i>
                                        </div>
                                        <span>Service with love</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-team"></i>
                                        </div>
                                        <span>Clients Focused</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-policy"></i>
                                        </div>
                                        <span>No policy fees</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-education"></i>
                                        </div>
                                        <span>Growing your business</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Why Choose Us Area -->

        <!-- Start Quote Area -->
        <!-- <section class="quote-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="quote-content">
                            <h2>Get a free quote</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="image">
                                <img src="{{asset('assets/pearo/pearo/assets/img/img1.png')}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="tab quote-list-tab">
                            <ul class="tabs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Life</a></li>
                            </ul>
        
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <p>Our experts will reply you with a quote very soon</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Property Used For</option>
                                                <option value="2">Home Insurance</option>
                                                <option value="0">Business Insurance</option>
                                                <option value="3">Health Insurance</option>
                                                <option value="4">Travel Insurance</option>
                                                <option value="5">Car Insurance</option>
                                                <option value="6">Life Insurance</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="default-btn">Get A Free Quote <span></span></button>
                                    </form>
                                </div>
        
                                <div class="tabs_item">
                                    <p>Our experts will reply you with a quote very soon</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Property Used For</option>
                                                <option value="2">Home Insurance</option>
                                                <option value="0">Business Insurance</option>
                                                <option value="3">Health Insurance</option>
                                                <option value="4">Travel Insurance</option>
                                                <option value="5">Car Insurance</option>
                                                <option value="6">Life Insurance</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="default-btn">Get A Free Quote <span></span></button>
                                    </form>
                                </div>

                                <div class="tabs_item">
                                    <p>Our experts will reply you with a quote very soon</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Property Used For</option>
                                                <option value="2">Home Insurance</option>
                                                <option value="0">Business Insurance</option>
                                                <option value="3">Health Insurance</option>
                                                <option value="4">Travel Insurance</option>
                                                <option value="5">Car Insurance</option>
                                                <option value="6">Life Insurance</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="default-btn">Get A Free Quote <span></span></button>
                                    </form>
                                </div>

                                <div class="tabs_item">
                                    <p>Our experts will reply you with a quote very soon</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Property Used For</option>
                                                <option value="2">Home Insurance</option>
                                                <option value="0">Business Insurance</option>
                                                <option value="3">Health Insurance</option>
                                                <option value="4">Travel Insurance</option>
                                                <option value="5">Car Insurance</option>
                                                <option value="6">Life Insurance</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="default-btn">Get A Free Quote <span></span></button>
                                    </form>
                                </div>

                                <div class="tabs_item">
                                    <p>Our experts will reply you with a quote very soon</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Property Used For</option>
                                                <option value="2">Home Insurance</option>
                                                <option value="0">Business Insurance</option>
                                                <option value="3">Health Insurance</option>
                                                <option value="4">Travel Insurance</option>
                                                <option value="5">Car Insurance</option>
                                                <option value="6">Life Insurance</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="default-btn">Get A Free Quote <span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Quote Area -->

        <!-- Start CTR Area -->
        <section class="ctr-area">
            <div class="container">
                <div class="ctr-content">
                    <h2>Tentang Perusahaan</h2>
                    <p>PT Reasuransi Nasional Indonesia, atau disingkat NASIONAL RE, didirikan berdasarkan akta Nomor 129 tanggal 22 Agustus 1994 di hadapan Sutjipto SH, Notaris di Jakarta</p>
                    <a href="#" class="default-btn">Selengkapnya <i class="flaticon-right-chevron"></i><span></span></a>
                </div>

                <div class="ctr-image">
                    <img src="{{asset('assets/pearo/pearo/assets/img/ctr-img.jpg')}}" alt="image">
                </div>

                <div class="shape">
                    <img src="{{asset('assets/pearo/pearo/assets/img/bg-dot3.png')}}" alt="image">
                </div>
            </div>
        </section>
        <!-- End CTR Area -->

        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Feedback</span>
                    <h2>What client says</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="feedback-slides">
					<div class="client-feedback">
						<div>
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
							
							<div class="item">
								<div class="single-feedback">
									<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
								</div>
							</div>
                        </div>
                        
                        <button class="prev-arrow slick-arrow">
                            <i class='flaticon-left-chevron'></i>
                        </button>
                        
                        <button class="next-arrow slick-arrow">
                            <i class='flaticon-right-chevron'></i>
                        </button>
                    </div>
                    
                    <div class="client-thumbnails">
						<div>
							<div class="item">
                                <div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/2.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>Jonus Nathan</h3>
                                    <span>CEO at Envato</span>
                                </div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/4.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>Sadio Finn</h3>
                                    <span>CEO at FlatIcon</span>
                                </div>
                            </div>
                            
                            <div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/1.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>Tom Olivar</h3>
                                    <span>CEO at ThemeForest</span>
                                </div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/5.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>James Finn</h3>
                                    <span>CEO at GitLab</span>
                                </div>
                            </div>
							
							<div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/1.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>John Lucy</h3>
                                    <span>CEO at Linkedin</span>
                                </div>
                            </div>
                            
                            <div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/3.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>Sarah Taylor</h3>
                                    <span>CEO at Twitter</span>
                                </div>
							</div>
							
							<div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/5.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>James Anderson</h3>
                                    <span>CEO at Facebook</span>
                                </div>
                            </div>
                            
                            <div class="item">
								<div class="img-fill"><img src="{{asset('assets/pearo/pearo/assets/img/client-image/3.jpg')}}" alt="client"></div>
                                
                                <div class="title">
                                    <h3>Steven Smith</h3>
                                    <span>CEO at EnvyTheme</span>
                                </div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </section>
        <!-- End Feedback Area -->

        <!-- Start Our Mission Area -->
        <section class="our-mission-area">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="mission-image bg-1">
                            <img src="{{asset('assets/pearo/pearo/assets/img/mission-img1.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="mission-text">
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>

                            <h3>Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>

                            <a href="#" class="default-btn">Learn More <span></span></a>

                            <div class="shape"><img src="{{asset('assets/pearo/pearo/assets/img/bg-dot2.png')}}" alt="image"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="mission-image bg-2">
                            <img src="{{asset('assets/pearo/pearo/assets/img/mission-img2.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="mission-text">
                            <div class="icon">
                                <i class="flaticon-medal"></i>
                            </div>

                            <h3>Our History</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>

                            <a href="#" class="default-btn">Learn More <span></span></a>

                            <div class="shape"><img src="{{asset('assets/pearo/pearo/assets/img/bg-dot2.png')}}" alt="image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Mission Area -->

        <!-- Start Team Area -->
        <!-- <section class="team-area ptb-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Agent</span>
                    <h2>Meet Our Experts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="team-slides owl-carousel owl-theme">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/team-image/2.jpg')}}" alt="image">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Lee Munroe</h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>

                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/team-image/3.jpg')}}" alt="image">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Calvin Klein</h3>
                            <span>Underwriter</span>
                        </div>
                    </div>

                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/team-image/4.jpg')}}" alt="image">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Sarah Taylor</h3>
                            <span>Agent</span>
                        </div>
                    </div>

                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('assets/pearo/pearo/assets/img/team-image/1.jpg')}}" alt="image">

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Alastair Cook</h3>
                            <span>Risk Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Team Area -->

        <!-- Start Our Achievements Area -->
        <section class="achievements-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="achievements-content">
                            <div class="title">
                                <span class="sub-title">Number</span>
                                <h2>Our Achievements</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                    <div class="single-funfact">
                                        <i class="flaticon-flag"></i>
                                        <h3><span class="odometer" data-count="65">00</span></h3>
                                        <p>Countries</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                    <div class="single-funfact">
                                        <i class="flaticon-group"></i>
                                        <h3><span class="odometer" data-count="107">00</span> <span class="sign-icon">m</span></h3>
                                        <p>Clients</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                                    <div class="single-funfact">
                                        <i class="flaticon-medal"></i>
                                        <h3><span class="odometer" data-count="150">00</span></h3>
                                        <p>Wining Awards</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-dot"><img src="{{asset('assets/pearo/pearo/assets/img/bg-dot.png')}}" alt="image"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="divider"></div>
                        <div class="achievements-image-slides owl-carousel owl-theme">
                            <div class="single-achievements-image bg1">
                                <img src="{{asset('assets/pearo/pearo/assets/img/achievements-img1.jpg')}}" alt="image">
                            </div>

                            <div class="single-achievements-image bg2">
                                <img src="{{asset('assets/pearo/pearo/assets/img/achievements-img2.jpg')}}" alt="image">
                            </div>

                            <div class="single-achievements-image bg3">
                                <img src="{{asset('assets/pearo/pearo/assets/img/achievements-img3.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Achievements Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100 pb-0">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Blog</span>
                    <h2>News And Insights</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('assets/pearo/pearo/assets/img/blog-image/1.jpg')}}" alt="image"></a>

                                <div class="date"><i class="flaticon-timetable"></i> Oct 14, 2019</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">2020 Insurance Trends And Possible Challenges</a></h3>
                                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                <a href="#" class="default-btn">Read More <span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('assets/pearo/pearo/assets/img/blog-image/2.jpg')}}" alt="image"></a>

                                <div class="date"><i class="flaticon-timetable"></i> Oct 10, 2019</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">Global Trends in the Life Insurance Industry</a></h3>
                                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                <a href="#" class="default-btn">Read More <span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#"><img src="{{asset('assets/pearo/pearo/assets/img/blog-image/3.jpg')}}" alt="image"></a>

                                <div class="date"><i class="flaticon-timetable"></i> Sep 13, 2019</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">The Best Car Insurance Companies in 2019</a></h3>
                                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                <a href="#" class="default-btn">Read More <span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="blog-notes">
                            <p>Insights to help you do what you do better, faster and more profitably. <a href="#">Read Full Blog</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Join Area -->
        <!-- <section class="join-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="join-image text-center">
                            <img src="{{asset('assets/pearo/pearo/assets/img/woman.png')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="join-content">
                            <h2>Great Place to Work</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <a href="#" class="default-btn">Join Now <i class="flaticon-right-chevron"></i><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Join Area -->
        @endif
        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3">
                        <div class="single-footer-widget">
                            <h3><b><i>Tentang Nasional Re</i></b></h3>

                            <h5 style="color: white;">Tentang Perusahaan</h5>
                            <ul class="footer-contact-info">
                                <li>profil perusahaan</li>
                                <li>Visi, Misi, dan Nilai-Nilai Perusahaan</li>
                                <li>Maksud dan Tujuan</li>
                                <li>Riwayat Perusahaan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3">
                        <div class="single-footer-widget">
                            <h3><b><i>Produk</i></b></h3>

                            <h5 style="color: white;">Reasuransi Konvensional</h5>
                            <ul class="footer-contact-info">
                                <li>Reasuransi Umum</li>
                                <li>Reasuransi Jiwa</li>
                            </ul>

                            <h5 style="color: white;">Reasuransi Syariah</h5>
                            <ul class="footer-contact-info">
                                <li>Reasuransi Syariah</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3">
                        <div class="single-footer-widget">
                            <h3><b><i>Artikel & Publikasi</i></b></h3>

                            <h5 style="color: white;">Artikel</h5>
                            <ul class="footer-contact-info">
                                <li>Berita</li>
                                <li>Corporate Social Responsibility</li>
                                <li>Galeri Kegiatan</li>
                            </ul>

                            <h5 style="color: white;">Publikasi</h5>
                            <ul class="footer-contact-info">
                                <li>Laporan Tahunan & Triwulan</li>
                                <li>Pedoman</li>
                                <li>Rating</li>
                                <li>Penghargaan</li>
                            </ul>

                            <h5 style="color: white;">Karir</h5>
                            <ul class="footer-contact-info">
                                <li>Karir</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3">
                        <div class="single-footer-widget">
                            <h3><b><i>Hubungi Kami</i></b></h3>

                            <h5 style="color: white;">Lokasi dan Kontak</h5>
                            <ul class="footer-contact-info">
                                <li>Lokasi dan Kontak</li>
                                <li>Pengaturan Pelanggan</li>
                            </ul>

                            <h5 style="color: white;">Media Sosial</h5>
                            <ul class="footer-contact-info">
                                <li><a href=""><img style="max-width: 20%;" class="img-responsive" src="http://www.nasionalre.co.id/assets/img/icon-fb.png"> Nasional Re</a></li>
                                <li><a href=""><img style="max-width: 20%;" class="img-responsive" src="http://www.nasionalre.co.id/assets/img/icon-twitter.png"> @NasionalRe</a></li>
                                <li><a href=""><img style="max-width: 20%;" class="img-responsive" src="http://www.nasionalre.co.id/assets/img/icon-linkedin.png"> Nasional Re</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="subscribe-area">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                        <!-- <p class="footer-text-heads">Terkait</p> -->
                        <p class="text-center">
                            <!-- <img title="Mari Berasuransi" src="img/mariberas.png">  -->
                            <a href="http://www.kemenkeu.go.id/" target="_blank" class="img-terkait"><img title="Kementrian Keuangan" src="http://www.nasionalre.co.id/assets/img/kemenkeu.png"></a>
                            <a href="http://www.ojk.go.id/" class="img-terkait" target="_blank"><img title="Otoritas Jasa Keuangan" src="http://www.nasionalre.co.id/assets/img/ojk.png"></a>
                            <a href="http://askrindo.co.id/" class="img-terkait" target="_blank"><img title="Askrindo" src="http://www.nasionalre.co.id/assets/img/askrindo.png"></a>
                            <a href="http://www.aaui.or.id/" class="img-terkait" target="_blank"><img title="Asosiasi Asuransi Umum Indonesia" src="http://www.nasionalre.co.id/assets/img/aaui.png"></a>
                            <a href="http://www.aaji.or.id/" class="img-terkait" target="_blank"><img title="Asosiasi Asuransi Jiwa Indonesia" src="http://www.nasionalre.co.id/assets/img/aaji.png"></a>
                            <a href="http://www.aasi.or.id/" class="img-terkait" target="_blank"><img title="Asosiasi Asuransi Syariah Indonesia" src="http://www.nasionalre.co.id/assets/img/aasi.png"></a>
                        </p>
                        <p class="text-center">
                            <img src="http://www.nasionalre.co.id/assets/img/mariberas.png" title="Mari Berasuransi" alt="">
                            <img src="http://www.nasionalre.co.id/assets/img/inklusi.png" title="Inklusi Keuangan" alt="">
                        </p>
                    </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <p><i class="far fa-copyright"></i> 2016 PT. Reasuransi Nasional Indonesia. All Rights Reserved</p>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <ul>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Kebijakan Pribadi</a></li>
                                <li><a href="#">Pemberitahuan Hukum</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- modal publikasi -->
<div class="modal fade right modal-publikasi" id="fluidModalRightSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Publikasi</p>

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
            <h4><b><i>Artikel</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Berita</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>Kepustakaan</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Peraturan-Peraturan</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>Publikasi</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Laporan Tahunan & Triwulan</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Ikhtisar Keuangan</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Pedoman</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Rating</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Penghargaan</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <p>
            <h4><b><i>Kegiatan</i></b></h4>
          </p>
          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Corporate Social Responsibility</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Galeri Kegiatan</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Diklat</i></b></a>
              <!-- <span class="badge badge-success badge-pill">14</span> -->
            </li>
          </ul>

          <ul class="list-group z-depth-0">
            <li class="list-group-item justify-content-between">
              <a href=""><b><i>Video</i></b></a>
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
        
        <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
        
        <!-- jQuery Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.min.js')}}"></script>
        <!-- Popper Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/bootstrap.min.js')}}"></script>
        <!-- Parallax Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/parallax.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/slick.min.js')}}"></script>
        <!-- MeanMenu JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Appear Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.appear.min.js')}}"></script>
        <!-- Odometer Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/odometer.min.js')}}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.nice-select.min.js')}}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- WOW Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/wow.min.js')}}"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/form-validator.min.js')}}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/contact-form-script.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assets/pearo/pearo/assets/js/main.js')}}"></script>

        <script type="text/javascript" src="{{ asset('assets/mdb/mdb.min.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.lainnya').click(function(e){
                    $('.modal-publikasi').modal();
                })
            })
        </script>
    </body>
</html>