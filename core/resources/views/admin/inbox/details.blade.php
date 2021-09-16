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

            <a class="btn btn-primary btn-sm" href="{{ url('admin/inbox') }}">
            <span class="btn-label">
              <i class="fas fa-buffer"></i>
            </span>
            Kembali
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
                  
                  <table class="table table-hover tbl-pesan">
                    <tbody>
                      <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>{{ $dt->nama }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>{{ $dt->email }}</td>
                      </tr>
                      <tr>
                        <th>Pesan</th>
                        <td>:</td>
                        <td>{{ $dt->pesan }}</td>
                      </tr>
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