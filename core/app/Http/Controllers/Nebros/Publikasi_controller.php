<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pengaduan_pelanggan;
use App\Models\M_laporan_tahunan;
use App\Models\M_pedoman;
use App\Models\M_rating;
use App\Models\M_penghargaan;
use App\Models\Ikhtisar_keuangan;

class Publikasi_controller extends Controller
{
    public function laporan_tahunan_detail(){
    	if(\App::getLocale() == 'id'){
            $title = 'Laporan Tahunan & Triwulan';
        }else{
            $title = 'Annual Report & Quarterly';
        }
        $tahun_tahunan = M_laporan_tahunan::selectRaw('year(tahun) tahunnya')->where('kategori',1)->orderBy('tahunnya','desc')->groupBy('tahunnya')->get();
        
        $tahun_triwulan = M_laporan_tahunan::selectRaw('year(tahun) tahunnya')->where('kategori',2)->orderBy('tahunnya','desc')->groupBy('tahunnya')->get();
        // dd($tahun_triwulan);
    	return view('nebros.laporan_tahunan.index_detail',compact('title','tahun_tahunan','tahun_triwulan'));
    }

    public function laporan_tahunan(){
        if(\App::getLocale() == 'id'){
            $title = 'Laporan Tahunan & Triwulan';
        }else{
            $title = 'Annual Report & Quarterly';
        }

        // $data = M_laporan_tahunan::where('kategori',1)->orderBy('tahun','desc')->limit(3)->get();
        $data = M_laporan_tahunan::selectRaw('year(tahun) tahunnya')->where('kategori',1)->orderBy('tahunnya','desc')->groupBy('tahunnya')->limit(3)->get();
        // dd($data);
        // $tris = M_laporan_tahunan::where('kategori',2)->orderBy('tahun','desc')->limit(3)->get();
        $tris = M_laporan_tahunan::selectRaw('year(tahun) tahunnya')->where('kategori',2)->orderBy('tahunnya','desc')->groupBy('tahunnya')->limit(3)->get();

        return view('nebros.laporan_tahunan.index',compact('title','data','tris'));
    }

    public function ikhtisar_keuangan(){
        $dt = Ikhtisar_keuangan::first();
    	if(\App::getLocale() == 'id'){
            $title = $dt->title_id;
        }else{
            $title = $dt->title_en;
        }

    	return view('nebros.ikhtisar_keuangan.index',compact('title','dt'));	
    }

    public function pedoman_perusahaan(){
    	if(\App::getLocale() == 'id'){
            $title = 'Pedoman Perusahaan';
        }else{
            $title = 'Company Guidance';
        }

        $data = M_pedoman::orderBy('created_at','desc')->get();

    	return view('nebros.pedoman_perusahaan.index',compact('title','data'));	
    }

    public function rating(){
    	if(\App::getLocale() == 'id'){
            $title = 'Rating';
        }else{
            $title = 'Rating';
        }

        $data = M_rating::orderBy('created_at','desc')->get();

    	return view('nebros.rating.index',compact('title','data'));
    }

    public function penghargaan(){
    	if(\App::getLocale() == 'id'){
            $title = 'Penghargaan';
        }else{
            $title = 'Award';
        }

        $data = M_penghargaan::orderBy('created_at','desc')->get();

    	return view('nebros.penghargaan.index',compact('title','data'));
    }

    public function pengaduan_pelanggan(){
        if(\App::getLocale() == 'id'){
            $title = 'Pengaduan Pelanggan';
        }else{
            $title = 'Customers Complaint';
        }

        return view('nebros.pengaduan_pelanggan.index',compact('title'));
    }

    public function store_pengaduan_pelanggan(Request $request){
        try {
            $a = $request->except(['_token','_method']);
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');

            Pengaduan_pelanggan::insert($a);

            \Session::flash('sukses','Pengaduan berhasil dikirim');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }
}
