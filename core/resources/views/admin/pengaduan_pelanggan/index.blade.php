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
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tertuju</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Saran</th>
                        <th scope="col">created at</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $e=>$dt)
                      <tr>
                        <td>{{ $e+1 }}</td>

                        <td>
                          <div>
                            <a class="btn btn-warning btn-xs" href="{{ url('admin/pengaduan-pelanggan/mail/'.$dt->id) }}">
                            <span class="btn-label">
                              <i class="fas fa-forward"></i>
                            </span>
                            </a>
                          </div>
                        </td>
                        <td>
                          {{ $dt->nama_perusahaan }}
                        </td>
                        <td>{{ $dt->bagian }}</td>
                        <td>{{ $dt->jabatan }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->tertuju }}</td>
                        <td>{{ $dt->komentar }}</td>
                        <td>{{ $dt->saran }}</td>
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

    <div class="col-md-4">
      
      <form class="form-inline">
        <div class="form-group">
          <!-- <label for="exampleInputEmail2">Email</label> -->
          <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="add email then enter">
        </div>
        <!-- <button type="submit" class="btn btn-success">Add Email</button> -->
      </form>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>default</th>
              <th>#</th>
              <th>email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($emails as $e=>$em)
            <tr>
              <td>
                <input type="checkbox" name="status" value="1" class="default-email" email_id="{{ $em->id }}" {{ ($em->status == 1) ? 'checked' : '' }}>
              </td>
              <td>{{ $e+1 }}</td>
              <td>{{ $em->email }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

  </div>

@endsection

@section('styles')

<script type="text/javascript">
  $(document).ready(function(){

    $('body').on('click','.default-email',function(e){
      e.preventDefault();
      var id = $(this).attr('email_id');
      var url = "{{ url('admin/email/set-default') }}"+'/'+id;
      window.location.href = url;
    })

    $("input[name='email']").keypress(function(e){
      var _this = $(this);
      if(e.which == 13){
        e.preventDefault();
        var email = _this.val();
        var url = "{{ url('admin/email') }}"+'/'+email;
        window.location.href = url;
      }
    })

    $('.btn-refresh').click(function(e){
      e.preventDefault();
      location.reload();
    })
  })
</script>

@endsection