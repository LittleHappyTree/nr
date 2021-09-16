@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">{{ $title }}</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.dashboard')}}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Pages</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">{{ $title }}</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          <p>

            <a class="btn btn-warning btn-sm btn-refresh" href="#">
            <span class="btn-label">
              <i class="fas fa-buffer"></i>
            </span>
            Refresh
            </a>

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/video') }}">
            <span class="btn-label">
              <i class="fas fa-backward"></i>
            </span>
            Kembali
            </a>

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                
                <form role="form" method="post" action="{{ url('admin/video/'.$dt->id) }}" enctype="multipart/form-data">
                  @csrf
                  {{ method_field('PUT') }}
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul" value="{{ $dt->judul }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul EN</label>
                      <input type="text" name="judul_en" class="form-control" id="exampleInputEmail1" placeholder="Judul" value="{{ $dt->judul_en }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">url video</label>
                      <input type="text" name="url" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="url video" value="{{ $dt->url }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Keyword</label>
                      <textarea rows="5" class="form-control" name="meta_keywords">{{ $dt->meta_keywords }}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Description</label>
                      <textarea rows="5" class="form-control" name="meta_description">{{ $dt->meta_description }}</textarea>
                    </div>

                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>

              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('styles')

<script type="text/javascript">
  $(document).ready(function(){
    $('.btn-refresh').click(function(e){
      e.preventDefault();
      location.reload();
    })
  })
</script>

@endsection