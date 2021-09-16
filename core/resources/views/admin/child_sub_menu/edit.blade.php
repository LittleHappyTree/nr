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

            <a class="btn btn-secondary btn-sm btn-flat" href="{{ url('admin/child-sub-menu') }}">
            <span class="btn-label">
              <i class="fas fa-backward"></i>
            </span>
            Kembali ke Parent Sub Menu
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
                <form role="form" method="post" action="{{ url('admin/child-sub-menu/'.$dt->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Parent Sub Menu</label>
                  <select class="form-control" name="parent_sub_menu">
                    @foreach($parent as $pn)
                    <option value="{{ $pn->id }}">{{ $pn->menus->nama }} - {{ $pn->nama }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Child Sub Menu</label>
                  <input type="text" name="nama" value="{{ $dt->nama }}" class="form-control" id="exampleInputEmail1" placeholder="nama menu">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">pages</label>
                  <select class="form-control" name="pages">
                    @foreach($pages as $pn)
                    <option value="{{ $pn->id }}" {{ ($dt->pages == $pn->id) ? 'selected' : '' }}>{{ $pn->name }}</option>
                    @endforeach
                  </select>
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