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

            <!-- <a class="btn btn-secondary btn-sm" href="{{ url('admin/child-sub-menu/add') }}">
            <span class="btn-label">
              <i class="fas fa-plus"></i>
            </span>
            Tambah Child Sub Menu
            </a> -->

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                
                <div class="row">
                  <div class="col-md-6">
                    

                    <form role="form" method="post" action="{{ url('admin/marquee/'.$dt->id) }}">
                      @csrf
                      <div class="box-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Keterangan Ucapan</label>
                          <textarea class="form-control" rows="5" name="keterangan">{{ $dt->keterangan }}</textarea>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
         
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>

                  </div>

                  <div class="col-md-6">

                    <form role="form" method="post" action="{{ url('admin/marquee/client/add/'.$dt->id) }}">
                      @csrf
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Client</label>
                          <input type="text" autocomplete="off" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Client">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Tanggal Ultah *(abaikan tahun)</label>
                          <input type="text" name="tanggal" autocomplete="off" class="form-control datepicker" id="exampleInputPassword1" placeholder="Tanggal Ultah" value="{{ date('m/d/Y') }}">
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
         
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tambah Client</button>
                      </div>
                    </form>

                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama Client</th>
                            <th>Tgl Ultah</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($dt->clients as $e=>$cl)
                          <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $cl->nama }}</td>
                            <td>{{ date('d F',strtotime($cl->tanggal)) }}</td>
                            <td>
                              <div style="width:60px">
                                <button href="{{ url('admin/marquee/client/delete/'.$cl->id) }}" class="btn btn-danger btn-hapus btn-xs" id="delete"><i class="fas fa-trash"></i></button>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

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