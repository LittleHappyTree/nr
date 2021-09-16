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

            

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                

                <form method="post" action="{{ url('admin/ikhtisar_keuangan/'.$dt->id) }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="row">

                    <div class="col-md-6">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="">Title ID</label>
                            <input type="text" name="title_id" class="form-control" id="exampleInputEmail1" placeholder="Title ID" value="{{ $dt->title_id }}">
                          </div>
                          <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div> -->
                          <div class="form-group">
                            <label for="exampleInputFile">Upload Photo</label>
                            <input type="file" name="photo" id="exampleInputFile">
           
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                        </div>
                        <!-- /.box-body -->
           
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="">Title EN</label>
                            <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="Title EN" value="{{ $dt->title_en }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Compress</label>
                            <input type="number" name="compress" value="0" class="form-control" id="exampleInputPassword1" placeholder="Compress">
                          </div>
                        </div>
                        <!-- /.box-body -->
           
                        
                    </div>

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