<div class="home-area home-slides owl-carousel owl-theme">
            @foreach($banner as $e=>$bn)
            
            <div class="main-banner" style="background-image: url({{ $bn->photo }});position: center top !important;">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <!-- <span class="sub-title">Enjoy Your Happiness</span> -->
                                <h1>{{ $bn->nama_besar }}</h1>
                                <p>{{ $bn->nama_kecil }}</p>

                                <div class="btn-box">
                                    <!-- <a href="#" class="default-btn">Get A Quote <span></span></a> -->
                                    <!-- <a href="#" class="optional-btn">Contact Us <span></span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>