@extends('pearo.index')

@section('content')

<section class="blog-area ptb-100 pb-0">
            <div class="container">
                <div class="section-title">
                    <!-- <span class="sub-title">Our Blog</span> -->
                    <h2>Portal Berita</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                </div>

                @foreach($data->chunk(3) as $dtChunk)
                <div class="row">
                    @foreach($dtChunk as $dt)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ url('nre2/portal/'.$dt->slug) }}"><img src="{{ asset('assets/front/img/blogs/'.$dt->main_image) }}" alt="image" style="height: 200px;"></a>

                                <div class="date"><i class="flaticon-timetable"></i> Oct 14, 2019</div>
                            </div>

                            <div class="post-content">
                                <h3><a href="{{ url('nre2/portal/'.$dt->slug) }}">{{ Str::limit($dt->title,60) }}</a></h3>
                                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                                <a href="{{ url('nre2/portal/'.$dt->slug) }}" class="default-btn">Read More <span></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                {{ $data->links() }}
            </div>
        </section>

@endsection