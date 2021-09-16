@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Page Lists</h4>
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
        <a href="#">Page Lists</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      <div class="card">
        <div class="card-header">
          <p>

            <a class="btn btn-warning btn-sm btn-refresh" href="#">
            <span class="btn-label">
              <i class="fas fa-buffer"></i>
            </span>
            Refresh
            </a>

            <a class="btn btn-secondary btn-sm btn-flat" href="{{ url('admin/front/banner') }}">
            <span class="btn-label">
              <i class="fas fa-backward"></i>
            </span>
            Kembali ke List Banner
            </a>

          </p>
          <div class="card-title">Page Lists</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                <form role="form" method="post" action="{{ route('update-banner',['id'=>$dt->id]) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Caption Kecil</label>
                  <input type="text" name="nama_kecil" value="{{ $dt->nama_kecil }}" class="form-control" id="exampleInputEmail1" placeholder="Caption Kecil">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Caption Besar</label>
                  <input type="text" name="nama_besar" value="{{ $dt->nama_besar }}" class="form-control" id="exampleInputPassword1" placeholder="Caption Besar">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">urutan</label>
                  <input type="text" name="urutan" value="{{ $dt->urutan }}" class="form-control" id="exampleInputPassword1" placeholder="urutan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">periode dari</label>
                  <input type="text" name="dari" class="form-control datepicker" id="exampleInputPassword1" placeholder="periode dari" autocomplete="off" value="{{ date('m/d/Y',strtotime($dt->dari)) }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">periode sampai</label>
                  <input type="text" name="sampai" class="form-control datepicker" id="exampleInputPassword1" placeholder="periode sampai" autocomplete="off" value="{{ date('m/d/Y',strtotime($dt->sampai)) }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Link</label>
                  <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="Link" value="{{ $dt->link }}">
                </div>

                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea id="nicContent" class="form-control nic-edit" name="keterangan" rows="8" cols="80" placeholder="Keterangan"></textarea>
                  <p id="errcontent" class="mb-0 text-danger em"></p>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <input type="file" name="photo" id="exampleInputFile">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Compress (%)</label>
                  <input type="number" name="compress" class="form-control" id="exampleInputPassword1" placeholder="urutan" value="0">
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
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