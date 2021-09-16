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

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/dewan-komisaris/add') }}">
            <span class="btn-label">
              <i class="fas fa-plus"></i>
            </span>
            Tambah Dewan Komisaris
            </a>

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body">

          <form class="form-inline" method="post" action="{{ url('admin/dewan-komisaris/title') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputName2">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputName2" value="{{ $dt->title }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Title EN</label>
              <input type="text" name="title_en" class="form-control" id="exampleInputEmail2" value="{{ $dt->title_en }}">
            </div>
            <button type="submit" class="btn btn-default">Save</button>
          </form>
          
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
                        <th scope="col">nama</th>
                        <th scope="col">jabatan</th>
                        <th scope="col">photo</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $e=>$dt)
                      <tr>
                        <td>{{ $e+1 }}</td>

                        <td>
                          <div>
                            <a class="btn btn-warning btn-xs" href="{{ url('admin/dewan-komisaris/'.$dt->id) }}">
                            <span class="btn-label">
                              <i class="fas fa-pen"></i>
                            </span>
                            </a>

                            <button class="btn btn-danger btn-xs btn-hapus" href="{{ url('admin/dewan-komisaris/'.$dt->id) }}">
                            <span class="btn-label">
                              <i class="fas fa-trash"></i>
                            </span>
                            </button>
                          </div>
                        </td>
                        
                        <td>
                          {{ $dt->nama }}
                        </td>

                        <td>
                          {{ $dt->jabatan }}
                        </td>

                        <td>
                          <img src="{{ asset($dt->photo) }}" style="width: 200px;">
                        </td>
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