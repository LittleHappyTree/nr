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

            <a class="btn btn-secondary btn-sm" href="{{ route('add-banner') }}">
            <span class="btn-label">
              <i class="fas fa-plus"></i>
            </span>
            Tambah Banner
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
                <div class="table-responsive">
                  <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">C Value?</th>
                        <th scope="col">Dari</th>
                        <th scope="col">Sampai</th>
                        <th scope="col">with text?</th>
                        <th scope="col">Link</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $e=>$dt)
                      <tr>
                        <td>
                          <div>
                            <a class="btn btn-warning btn-xs" href="{{ route('edit-banner',['id'=>$dt->id]) }}">
                            <span class="btn-label">
                              <i class="fas fa-pen"></i>
                            </span>
                            </a>

                            <button class="btn btn-danger btn-xs btn-hapus" href="{{ route('hapus-banner',['id'=>$dt->id]) }}">
                            <span class="btn-label">
                              <i class="fas fa-trash"></i>
                            </span>
                            </button>
                          </div>
                        </td>
                        <td>{{ $e+1 }}</td>
                        <td>
                          <img style="height: 50px;" src="{{ asset('banners/'.$dt->photo) }}">
                        </td>
                        <td>{{ $dt->urutan }}</td>

                        <td>
                          <input type="checkbox" value="1" name="is_utama" banner-id="{{ $dt->id }}" {{ ($dt->is_utama == 1) ? 'checked' : '' }}>
                        </td>

                        @if($dt->dari != null)
                        <td>{{ date('d F Y',strtotime($dt->dari)) }}</td>
                        @else
                        <td></td>
                        @endif

                        @if($dt->sampai != null)
                        <td>{{ date('d F Y',strtotime($dt->sampai)) }}</td>
                        @else
                        <td></td>
                        @endif

                        <td>
                          <input type="checkbox" value="1" name="is_text" banner-id="{{ $dt->id }}" {{ ($dt->is_text == 1) ? 'checked' : '' }}>
                        </td>
                        <td>{{ url('/'.$dt->link) }}</td>
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

    $("input[name='is_text']").click(function(e){
 
      if($(this).is(':checked')){
           var id = $(this).attr('banner-id');
           var url = "{{ url('admin/banner/with-text') }}"+'/'+id;

           window.location.href=url;
      }else{
           var id = $(this).attr('banner-id');
           var url = "{{ url('admin/banner/no-text') }}"+'/'+id;

           window.location.href=url;
      }
  });

    $("input[name='is_utama']").click(function(e){
 
      if($(this).is(':checked')){
           var id = $(this).attr('banner-id');
           var url = "{{ url('admin/banner/utama') }}"+'/'+id;

           window.location.href=url;
      }else{
           var id = $(this).attr('banner-id');
           var url = "{{ url('admin/banner/no-utama') }}"+'/'+id;

           window.location.href=url;
      }
  });

    $('.btn-refresh').click(function(e){
      e.preventDefault();
      location.reload();
    })

  })
</script>

@endsection