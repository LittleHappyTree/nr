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
    <div class="col-md-8">

      <div class="card">
        <div class="card-header">
          <p>

            <a class="btn btn-warning btn-sm btn-refresh" href="#">
            <span class="btn-label">
              <i class="fas fa-buffer"></i>
            </span>
            Refresh
            </a>

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/new-gallery') }}">
            <span class="btn-label">
              <i class="fas fa-back"></i>
            </span>
            Kembali
            </a>

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body">
          
          <form role="form" method="post" action="{{ url('admin/new-gallery/'.$dt->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Kategori</label>
                <select class="form-control" name="kategori">
                  <option value="gallery" {{ ($dt->kategori == 'gallery') ? 'selected' : '' }}>Gallery</option>
                  <option value="diklat" {{ ($dt->kategori == 'diklat') ? 'selected' : '' }}>Diklat</option>
                  <option value="csr" {{ ($dt->kategori == 'csr') ? 'selected' : '' }}>CSR</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $dt->judul }}"></input>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Judul EN</label>
                <input type="text" class="form-control" name="judul_en" value="{{ $dt->judul_en }}"></input>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <textarea class="form-control nic-edit" rows="5" name="keterangan">{{ $dt->keterangan }}</textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Keterangan EN</label>
                <textarea class="form-control nic-edit" rows="5" name="keterangan_en">{{ $dt->keterangan_en }}</textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="photo[]" id="exampleInputFile" multiple="">

                <p class="help-block">Upload Photo.</p>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Resize (Persentase)</label>
                <input type="number" name="resize" id="exampleInputFile" autocomplete="off" class="form-control" placeholder="resize" value="0">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Meta Keyword</label>
                <textarea rows="5" class="form-control" name="meta_keyword">{{ $dt->meta_keyword }}</textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Meta Description</label>
                <textarea rows="5" class="form-control" name="meta_description">{{ $dt->meta_description }}</textarea>
              </div>
              
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>

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