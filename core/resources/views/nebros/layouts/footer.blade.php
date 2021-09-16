<div class="container wow fadeInUp">
  
  <div class="row top_60 infos">

    <div class="col-lg-3">
        <h3 class="second-title">Tentang Nasional Re</h3>
        <p class="footer-text-head">Tentang Perusahaan</p>
        <p class="footer-text-sub"><a href="{{ url('profile-perusahaan') }}" class="foot-hov">Profil Perusahaan</a></p>
        <p class="footer-text-sub"><a href="{{ url('visi-misi') }}" class="foot-hov">Visi, Misi, dan Nilai-Nilai Perusahaan</a></p>
        <p class="footer-text-sub"><a href="{{ url('maksud-tujuan') }}" class="foot-hov">Maksud dan Tujuan</a></p>
        <p class="footer-text-sub"><a href="{{ url('riwayat-perusahaan') }}" class="foot-hov">Riwayat Perusahaan</a></p>

        <p class="footer-text-head">Management</p>
        <p class="footer-text-sub"><a href="{{ url('dewan-komisaris') }}" class="foot-hov">Dewan Komisaris</a></p>
        <p class="footer-text-sub"><a href="{{ url('dewan-pengawas-syariah') }}" class="foot-hov">Dewan Pengawas Syariah</a></p>
        <p class="footer-text-sub"><a href="{{ url('direksi') }}" class="foot-hov">Direksi</a></p>

        <!-- <p class="footer-text-head">Ikhtisar Keuangan</p>
        <p class="footer-text-sub"><a href="http://www.nasionalre.co.id/ind/ikh_keu" class="foot-hov">Ikhtisar Keuangan</a></p> -->
    </div>

    <div class="col-lg-3">
        <h3 class="second-title">Produk</h3>
        <p class="footer-text-head">Reasuransi Konvensional</p>
        <p class="footer-text-sub"><a href="{{ url('reasum') }}" class="foot-hov">Reasuransi Umum</a></p>
        <p class="footer-text-sub"><a href="{{ url('reasji') }}" class="foot-hov">Reasuransi Jiwa</a></p>

        <p class="footer-text-head">Reasuransi Syariah</p>
        <p class="footer-text-sub"><a href="{{ url('reassya') }}" class="foot-hov">Reasuransi Syariah</a></p>
    </div>

    <div class="col-lg-3">
        <h3 class="second-title">Artikel &amp; Publikasi</h3>
        <p class="footer-text-head">Artikel</p>
        <p class="footer-text-sub"><a href="{{ url('portal') }}" class="foot-hov">Berita</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Corporate Social Responsibility</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Galeri Kegiatan</a></p>
        <p class="footer-text-head">Publikasi</p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Laporan Tahunan &amp; Triwulan</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Pedoman</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Rating</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Penghargaan</a></p>
        <p class="footer-text-head">Karir</p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Karir</a></p>
    </div>

    <div class="col-lg-3">
        <h3 class="second-title">Hubungi Kami</h3>
        <p class="footer-text-head">Lokasi dan Kontak</p>
        <p class="footer-text-sub"><a href="{{ url('contact-us') }}" class="foot-hov">Lokasi dan Kontak</a></p>
        <p class="footer-text-sub"><a href="#" class="foot-hov">Pengaduan Pelanggan</a></p>
        <p class="footer-text-head">Media Sosial</p>
        <div class="row">
            @foreach(\App\Models\M_medsos::get() as $md)
            <div class="col-sm-2" style="margin-right:-20px;">
                <a target="_blank" href="http://{{ $md->link }}"><img class="img-responsive" src="{{ asset('medsos/'.$md->photo) }}"></a>
            </div>
            <div class="col-sm-10">
                <p class="footer-text-sosmed"><a class="foot-hov">{{ $md->nama }}</a></p>
            </div>
            @endforeach
        </div>
    </div>

  </div>

  <div class="row" style="margin-bottom:-30px;">
      <div class="col-sm-12">
          <p class="footer-text-heads">Terkait</p>
          <?php
            $logo_footer = \DB::table('m_footer_logo')->orderBy('created_at','asc')->get();
          ?>

          @foreach($logo_footer->chunk(6) as $lfChunk)
          <p class="text-center">
              <!-- <img title="Mari Berasuransi" src="img/mariberas.png">  -->
              @foreach($lfChunk as $lf)
              <a href="http://{{ $lf->link }}" target="_blank" class="img-terkait"><img title="Kementrian Keuangan" src="{{ asset($lf->photo) }}"></a>
              @endforeach
          </p>
          @endforeach
      </div>
  </div>

</div> <!-- container end -->