<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<title></title>
	<link rel="icon" href="{{asset('assets/front/img/favicon.jpg')}}">
	@includeif('admin.partials.styles')
	@yield('styles')
</head>
<body data-background-color="dark">
	<div class="wrapper">

    {{-- top navbar area start --}}
    @includeif('admin.partials.top-navbar')
    {{-- top navbar area end --}}


    {{-- side navbar area start --}}
    @includeif('admin.partials.side-navbar')
    {{-- side navbar area end --}}


		<div class="main-panel">
			<div class="content">
        <div class="page-inner">
          @yield('content')
        </div>
			</div>
      @includeif('admin.partials.footer')
		</div>

	</div>

	<!-- modal hapus -->
	<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
 
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
 
          <div class="modal-body">
 
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="heading mt-4">Apakah kamu yakin ingin menghapus data ini?</h4>
            </div>
 
          </div>
 
          <div class="modal-footer">
            <form action="" method="post">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <p>
              <button type="submit" class="btn btn-danger btn-flat btn-sm menu-sidebar">Ok, Hapus</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
              </p>
            </form>
          </div>
 
        </div>
      </div>
    </div>

	@includeif('admin.partials.scripts')

	<script type="text/javascript">
		// btn hapus di klik
        $('body').on('click','.btn-hapus',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            $('#modal-hapus').find('form').attr('action',url);
            $('#modal-hapus').modal();
        });
	</script>

	@yield('styles')
</body>
</html>
