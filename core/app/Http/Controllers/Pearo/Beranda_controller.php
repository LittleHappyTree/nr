<?php

namespace App\Http\Controllers\Pearo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_banner;

class Beranda_controller extends Controller
{
    public function index(){
    	$banner = M_banner::get();
    	return view('pearo.index',compact('banner'));
    }
}
