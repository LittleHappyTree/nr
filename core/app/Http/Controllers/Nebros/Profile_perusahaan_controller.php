<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;
use App\Models\M_direksi;
use App\Models\M_dewan_komisaris;
use App\Models\M_dewan_pengawas_syariah;

class Profile_perusahaan_controller extends Controller
{
    public function index(){
    	$dt = Page::where('name','profile')->first();
        
        if(\App::getLocale() == 'id'){
            $title = $dt->title;
        }else{
            $title = 'Company Profile';
        }

    	return view('nebros.profile_perusahaan.index',compact('dt','title'));
    }

    public function visi_misi(){
    	$dt = Page::where('name','visimisi')->first();
        $title = $dt->title;
    	return view('nebros.visimisi.index',compact('dt','title'));
    }

    public function maksud_tujuan(){
    	$dt = Page::where('name','maksuddantujuan')->first();
        $title = $dt->title;
    	return view('nebros.maksud_tujuan.index',compact('dt','title'));
    }

    public function dewan_komisaris(){
        if(\App::getLocale() == 'id'){
            $title = M_dewan_komisaris::first();
            $title = $title->title;
        }else{
            $title = M_dewan_komisaris::first();
            $title = $title->title_en;
        }
        $data = M_dewan_komisaris::orderBy('created_at','asc')->get();

        return view('nebros.dewan_komisaris.index',compact('data','title'));
    }

    public function dewan_pengawas_syariah(){
        if(\App::getLocale() == 'id'){
            $title = M_dewan_pengawas_syariah::first();
            $title = $title->title;
        }else{
            $title = M_dewan_pengawas_syariah::first();
            $title = $title->title_en;
        }
        $data = M_dewan_pengawas_syariah::orderBy('created_at','asc')->get();

        return view('nebros.dewan_syariah.index',compact('data','title'));
    }

    public function direksi(){
        if(\App::getLocale() == 'id'){
            $title = M_direksi::first();
            $title = $title->title;
        }else{
            $title = M_direksi::first();
            $title = $title->title_en;
        }
        $data = M_direksi::orderBy('created_at','asc')->get();

        return view('nebros.direksi.index',compact('data','title'));
    }

    public function produk_reasum(){
        $dt = Page::where('name','reasuransi-umum')->first();
        $title = $dt->title;
        return view('nebros.visimisi.index',compact('dt','title'));
    }

    public function produk_reasji(){
        $dt = Page::where('name','reasuransi-jiwa')->first();
        $title = $dt->title;
        return view('nebros.visimisi.index',compact('dt','title'));
    }

    public function produk_reassya(){
        $dt = Page::where('name','reasuransi-syariah')->first();
        $title = $dt->title;
        return view('nebros.visimisi.index',compact('dt','title'));
    }

    public function riwayat_perusahaan(){
        $title = 'Riwayat Perusahaan';
        return view('nebros.riwayat.index',compact('title'));
    }
}
