@extends('nebros.index')

@section('modals')



@if($event != null)
<!--Modal: Name-->
    <div class="modal fade modal-baru" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document" style="overflow-y: initial !important">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body" style="max-height: calc(100vh - 200px);overflow-y: auto;">

            <center>
              <img src="{{ asset('banner_event/'.$event->banner_events->photo) }}" style="width: 100%;">
            </center>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <!-- <span class="mr-4">Spread the word!</span> -->
            <!-- <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a> -->
            <!--Twitter-->
            <!-- <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a> -->
            <!--Google +-->
            <!-- <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a> -->
            <!--Linkedin-->
            <!-- <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a> -->

            <center>
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
            </center>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->
@endif

@endsection

@section('modals')



@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){

		@if($event != null)
			$('#modal-event').modal();
		@endif

    $('.modal-baru').modal();

	})
</script>

@endsection