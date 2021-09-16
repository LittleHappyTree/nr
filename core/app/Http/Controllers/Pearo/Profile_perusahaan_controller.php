<?php

namespace App\Http\Controllers\Pearo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;

class Profile_perusahaan_controller extends Controller
{
    public function index(){
    	$dt = Page::where('name','profile')->first();
    	return view('pearo.profile.index',compact('dt'));
    }

    public function visi_misi(){
    	$dt = Page::where('name','visimisi')->first();
    	return view('pearo.visi_misi.index',compact('dt'));
    }

    public function maksud(){
    	$dt = Page::where('name','maksuddantujuan')->first();
    	return view('pearo.maksud.index',compact('dt'));
    }
}
