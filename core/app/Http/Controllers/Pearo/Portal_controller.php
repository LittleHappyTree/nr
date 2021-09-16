<?php

namespace App\Http\Controllers\Pearo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Blog;
use App\Bcategory;

class Portal_controller extends Controller
{
    public function index(){
    	$data = Blog::with('bcategory')->orderBy('created_at','desc')->paginate(9);

    	return view('pearo.portal.index',compact('data'));
    }

    public function detail($slug){
    	$dt = Blog::where('slug',$slug)->first();
    	$kategori = Bcategory::get();
    	$recent = Blog::with('bcategory')->orderBy('created_at','desc')->limit(5)->get();

    	return view('pearo.portal.detail',compact('dt','kategori','recent'));
    }
}
