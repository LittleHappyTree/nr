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

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/laporan-tahunan') }}">
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
                
                <form role="form" method="post" action="{{ url('admin/laporan-tahunan/add') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="nama">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kategori</label>
                      <select class="form-control" name="kategori">
                        <option value="1">Laporan Tahunan</option>
                        <option value="2">Laporan Triwulan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tahun</label>
                      <input type="text" name="tahun" class="form-control" id="exampleInputEmail1" placeholder="ketik tahun" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">file</label>
                      <input type="file" name="files">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">photo thumbnail optional</label>
                      <input type="file" name="photo">
                    </div>

                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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