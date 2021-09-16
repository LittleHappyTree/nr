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
                

                <div class="row">

                  <div class="col-md-6">
                    <form method="post" action="{{ url('admin/alamat') }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <textarea class="form-control" rows="5" name="alamat">{{ $dt->alamats->nama }}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">iframe</label>
                      <textarea class="form-control" rows="5" name="iframe">{{ $dt->alamats->iframe }}</textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" name="email" class="form-control" value="{{ $dt->emails->nama }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                  </form>
                  </div>

                  <div class="col-md-6">
                    
                    <div class="table-responsive">
                      <form method="post" action="{{ url('admin/add_no_telp') }}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tambah No Telp</label>
                        <input type="text" name="nama" class="form-control" autocomplete="off">
                        <button type="submit" class="btn btn-success btn-xs">Add</button>
                      </div>
                      </form>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>no_telp</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dt->no_telps as $e=>$tp)
                          <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $tp->nama }}</td>
                            <td>
                              <button href="{{ url('admin/add_no_telp/'.$tp->id) }}" class="btn btn-danger btn-xs btn-hapus">hapus</button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    <div class="table-responsive">
                      <form method="post" action="{{ url('admin/add_fax') }}">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tambah Fax</label>
                        <input type="text" name="nama" class="form-control" autocomplete="off">
                        <button type="submit" class="btn btn-success btn-xs">Add</button>
                      </div>
                      </form>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>fax</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dt->faxs as $e=>$tp)
                          <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $tp->nama }}</td>
                            <td>
                              <button href="{{ url('admin/add_fax/'.$tp->id) }}" class="btn btn-danger btn-xs btn-hapus">hapus</button>
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