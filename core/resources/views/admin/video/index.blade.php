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

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/video/add') }}">
            <span class="btn-label">
              <i class="fas fa-plus"></i>
            </span>
            Tambah Video
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
                        <th scope="col">#</th>
                        <th scope="col">photo thumbnail</th>
                        <th scope="col">judul</th>
                        <th scope="col">url</th>
                        <th scope="col">created at</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $e=>$dt)
                      <tr>
                        <td>{{ $e+1 }}</td>

                        <td>
                          <div>
                            <a class="btn btn-warning btn-xs" href="{{ url('admin/video/'.$dt->id) }}">
                            <span class="btn-label">
                              <i class="fas fa-pen"></i>
                            </span>
                            </a>

                            <button class="btn btn-danger btn-xs btn-hapus" href="{{ url('admin/video/'.$dt->id) }}">
                            <span class="btn-label">
                              <i class="fas fa-trash"></i>
                            </span>
                            </button>
                          </div>
                        </td>
                        
                        <td>
                          <img src="https://img.youtube.com/vi/{{$dt->id_yt}}/hqdefault.jpg" style="width: 150px;">
                        </td>
                        <td>
                          {{ $dt->judul }}
                        </td>
                        <td>{{ $dt->url }}</td>
                        <td>{{ $dt->created_at }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->links() }}
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