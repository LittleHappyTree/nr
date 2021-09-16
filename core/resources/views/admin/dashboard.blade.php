@extends('admin.layout')

@section('content')
  <div class="mt-2 mb-4">
    <h2 class="text-white pb-2">Welcome back, {{Auth::guard('admin')->user()->first_name}} {{Auth::guard('admin')->user()->last_name}}!</h2>
  </div>
  <div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-primary card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-users"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">User</p>
								<h4 class="card-title">{{ \DB::table('admins')->count() }}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-info card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-interface-6"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">News</p>
								<h4 class="card-title">{{ \DB::table('blogs')->count()}}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="card card-stats card-secondary card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-success"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Gallery</p>
								<h4 class="card-title">{{\DB::table('gallery')->count()}}</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection
