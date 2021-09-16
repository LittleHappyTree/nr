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

            <a class="btn btn-secondary btn-sm btn-flat" href="{{ url('admin/front/medsos') }}">
            <span class="btn-label">
              <i class="fas fa-backward"></i>
            </span>
            Kembali ke logo medsos
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
                <form role="form" method="post" action="{{ route('store-medsos') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <input type="file" name="photo" id="exampleInputFile">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Link</label>
                  <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="Link">
                </div>

              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
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