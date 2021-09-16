<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_color;

class Color_controller extends Controller
{
    public function index(){
    	$title = 'Manage Color';
    	$data = M_color::get();

    	return view('admin.color.index',compact('title','data'));
    }

    public function update(Request $request){
    	try {
    		$key = $request->key;
    		$color = $request->color;

    		\DB::transaction(function()use($key,$color){

    			foreach ($color as $e=>$cl) {
    				M_color::where('key',$key[$e])->update(['color'=>$cl]);
    			}

    		});

    		\Session::flash('success','Data berhasil disimpan');

    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect('admin/color');
    }
}
