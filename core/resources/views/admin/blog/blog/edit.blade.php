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

            <a class="btn btn-secondary btn-sm" href="{{ url('admin/blogs') }}">
            <span class="btn-label">
              <i class="fas fa-backward"></i>
            </span>
            Kembali
            </a>

          </p>
          <div class="card-title">{{ $title }}</div>
        </div>
                
                <form role="form" method="post" action="{{ url('admin/blog/'.$dt->id) }}" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                  @csrf
                  {{ method_field('PUT') }}
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="nama" value="{{ $dt->title }}">
                    </div>

                    <div class="form-group">
                      <label for="">Content ID**</label>
                      <textarea id="nicContent" class="form-control nic-edit" name="content" rows="8" cols="80" placeholder="Enter content">{{ $dt->content }}</textarea>
                      <p id="errcontent" class="mb-0 text-danger em"></p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kategori</label>
                      <select class="form-control" name="bcategory_id">
                        @foreach($kategori as $kt)
                        <option value="{{ $kt->id }}" {{ ($dt->bcategory_id == $kt->id) ? 'selected' : '' }}>{{ $kt->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta_keywords</label>
                      <input type="text" name="meta_keywords" class="form-control" id="exampleInputEmail1" placeholder="nama" value="{{ $dt->meta_keywords }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta_description</label>
                      <input type="text" name="meta_description" class="form-control" id="exampleInputEmail1" placeholder="nama" value="{{ $dt->meta_description }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Thumbnail</label>
                      <input type="file" name="photo">
                    </div>

                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>

              @endif
            </div>

            <div class="col-lg-6">
              @if (count($pages) == 0)
                <h2 class="text-center">NO LINK ADDED</h2>
              @else
                  @csrf
                  {{ method_field('PUT') }}
                  <div class="box-body">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title EN</label>
                      <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="title_en" value="{{ $dt->title_en }}">
                    </div>

                    <div class="form-group">
                      <label for="">Content EN**</label>
                      <textarea id="nicContent" class="form-control nic-edit" name="content_en" rows="8" cols="80" placeholder="Enter content">{{ $dt->content_en }}</textarea>
                      <p id="errcontent" class="mb-0 text-danger em"></p>
                    </div>

                    

                  </div>

              @endif
            </div>
          </div>
        </div>
                </form>
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