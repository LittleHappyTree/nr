<script src="{{asset('assets/nebro/main/js/jquery-2.1.4.min.js')}}"></script>
<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->
<script src="{{asset('assets/nebro/main/js/plugins.js')}}"></script>
<script src="{{asset('assets/nebro/main/js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/mdb.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script type="text/javascript">
  $(document).ready(function(){



    var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            alert(pesan);
        }
 
        var gagal = "{{ Session::has('gagal') }}";
        if(gagal){
            var pesan = "{{ Session::get('gagal') }}"
            alert(pesan);
        }
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $(window).scroll(function() {       
    var scroll = $(window).scrollTop();
    var homeheight = $(".hero").height() -86;     

    if (scroll > homeheight ) {                       
      // $("header").addClass('fixed');
      $('.text-berjalan').hide();
      } else {
      $("header").removeClass('fixed');
      $('.text-berjalan').show();
      }
    });

    $('.tentang_kami').click(function(e){
      e.preventDefault();
      $('.modal-tentang-kami').modal();
    })

    $('.publikasi').click(function(e){
      e.preventDefault();
      $('.modal-publikasi').modal();
    })

    $('.produk').click(function(e){
      e.preventDefault();
      $('.modal-produk').modal();
    })

    $('.btn-portal').click(function(e){
      e.preventDefault();
      $('#preloader').fadeIn();
      var url = "http://digital.nasionalre.id";
      window.location.href = url;
    })

    $('.btn-contact').click(function(e){
      e.preventDefault();
      $('#preloader').fadeIn();
      var url = "{{ url('contact-us') }}";
      window.location.href = url;
    })

    $('.btn-pengaduan').click(function(e){
      e.preventDefault();
      $('#preloader').fadeIn();

      var url = $(this).attr('href');
      window.location.href = url;
    })

    $('.btn-beranda').click(function(e){
      e.preventDefault();
      $('#preloader').fadeIn();
      var url = $(this).attr('href');
      window.location.href = url;
    })

    if($("#header-utama").hasClass("fixed")){
      alert('dsf');
    }

    $('body').on('click','.btn-see-more',function(e){
      e.preventDefault();
      var url = $(this).attr('href');
      window.location.href = url;
    })

    $('body').on('click','.btn-lang',function(e){
      e.preventDefault();
      
      $('#modal-lang').modal();
    })

  })
</script>