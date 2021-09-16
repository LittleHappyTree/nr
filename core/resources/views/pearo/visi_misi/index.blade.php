@extends('pearo.index')

@section('content')

<section class="about-area ptb-100 bg-f8f8f8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="about-image">
                            <!-- <img src="https://i.imgur.com/yYVaNsM.jpg" alt="image"> -->
                            <center>
                            	<!-- <img src="https://i.imgur.com/yYVaNsM.jpg" alt="image"> -->
                            </center>
                        </div>
                    </div>

                    
                </div>

                <div class="row align-items-center">
                	<div class="col-lg-12 col-md-12">
                        <div class="about-content">
                            <center><h2>{{ $dt->subtitle }}</h2></center>
                            <p>{!! $dt->body !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection