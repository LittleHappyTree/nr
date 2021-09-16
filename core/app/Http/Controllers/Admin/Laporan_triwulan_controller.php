<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_laporan_tahunan;

class Laporan_triwulan_controller extends Controller
{
    public function index(){
    	$title = 'Laporan triwulan';
    	$data = M_laporan_tahunan::where('kategori',2)->orderBy('tahun','desc')->paginate(15);

    	return view('admin.laporan_tahunan.index',compact('title','data'));
    }
}
