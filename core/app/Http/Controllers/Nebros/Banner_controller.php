<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_banner;

class Banner_controller extends Controller
{
    public function detail($id){
    	$dt = M_banner::find($id);
    	$title = $dt->nama_kecil;

    	return view('nebros.banner.detail',compact('dt','title'));
    }
}
