@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Pages</h4>
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
        <a href="#">Edit Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Pages</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit Page</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="{{route('admin.page.index')}}">
						<span class="btn-label">
							<i class="fas fa-backward" style="font-size: 12px;"></i>
						</span>
						Back
					</a>
        </div>
        <div class="card-body pt-5 pb-4">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <form id="ajaxForm" action="{{route('admin.page.update')}}" method="post">
                @csrf
                <input type="hidden" name="pageid" value="{{$page->id}}">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Name **</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$page->name}}">
                      <p id="errname" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Title **</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$page->title}}">
                      <p id="errtitle" class="em text-danger mb-0"></p>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Title EN**</label>
                      <input type="text" class="form-control" name="title_en" placeholder="Enter Title" value="{{$page->title_en}}">
                      <p id="errtitle" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Subtitle **</label>
                      <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" value="{{$page->subtitle}}">
                      <p id="errsubtitle" class="em text-danger mb-0"></p>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Body **</label>
                  <textarea id="body" class="form-control nic-edit" name="body" rows="20" cols="80">{{$page->body}}</textarea>
                  <p id="errbody" class="em text-danger mb-0"></p>
                </div>
                
                <div class="form-group">
                  <label for="">Body EN**</label>
                  <textarea id="body_en" class="form-control nic-edit" name="body_en" rows="20" cols="80">{{$page->body_en}}</textarea>
                  <p id="errbody" class="em text-danger mb-0"></p>
                </div>

              </form>

            </div>
          </div>
        </div>

        <div class="card-footer">
          <div class="form">
            <div class="form-group from-show-notify row">
              <div class="col-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Update</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
