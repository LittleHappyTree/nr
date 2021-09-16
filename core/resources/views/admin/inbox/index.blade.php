@extends('admin.layout')

@section('content')

<style type="text/css">
  a {
    color: white;
  }  
</style>

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
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $e=>$dt)

                      <tr>
                        
                        @if($dt->status == null)

                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}"><b><i>{{ $e+1 }}</i></b></a></td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}"><b><i>{{ $dt->nama }}</i></b></a></td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}"><b><i>{{ $dt->email }}</i></b></a></td>
                        <td>
                          <a href="{{ url('admin/inbox/'.$dt->id) }}"><span class="badge badge-danger"><b><i>Belum Dibaca</i></b></span></a>
                        </td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}"><b><i>{{ $dt->created_at }}</i></b></a></td>

                        @else

                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}">{{ $e+1 }}</a></td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}">{{ $dt->nama }}</a></td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}">{{ $dt->email }}</a></td>
                        <td>
                          <a href="{{ url('admin/inbox/'.$dt->id) }}"><span class="badge badge-success">Sudah Dibaca</span></a>
                        </td>
                        <td><a href="{{ url('admin/inbox/'.$dt->id) }}">{{ $dt->created_at }}</a></td>

                        @endif
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
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