<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;
use Illuminate\Support\Facades\Input;

use App\Models\Video;

class Video_controller extends Controller
{
    public function index(){
    	$title = 'list video';
    	$data = Video::orderBy('created_at','desc')->paginate(10);

    	return view('admin.video.index',compact('title','data'));
    }

    public function add(){
    	$title = 'tambah video';

    	return view('admin.video.add',compact('title'));
    }

    public function store(Request $request){
    	try {
            $url = $request->url;

    		$a = [];
    		$a['judul'] = $request->judul;
            $a['judul_en'] = $request->judul_en;

            $urlNya = explode('&', $url);

    		$a['url'] = $urlNya[0];
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            $a['meta_keywords'] = $request->meta_keywords;
            $a['meta_description'] = $request->meta_description;
            $a['created_by'] = \Auth::user()->email;

            $idyt = explode('=', $url);

            $ytid = explode('&', $idyt[1]);

            $a['id_yt'] = $ytid[0];

    		Video::insert($a);

    		\Session::flash('sukses','Data berhasil ditambah');
    		return redirect('admin/video');

    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    		return redirect()->back();
    	}

    	
    }

    public function edit($id){
    	$dt = Video::find($id);
    	$title = "Edit $dt->judul";

    	return view('admin.video.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
            $url = $request->url;
            
    		$a = [];
    		$a['judul'] = $request->judul;
            $a['judul_en'] = $request->judul_en;
    		
            $urlNya = explode('&', $url);

            $a['url'] = $urlNya[0];

    		$idyt = explode('=', $url);

            $ytid = explode('&', $idyt[1]);

            $a['id_yt'] = $ytid[0];
            $a['meta_keywords'] = $request->meta_keywords;
            $a['meta_description'] = $request->meta_description;
            $a['updated_by'] = \Auth::user()->email;

    		Video::where('id',$id)->update($a);

    		\Session::flash('sukses','Data berhasil diupdate');
    		return redirect('admin/video');

    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    		return redirect()->back();
    	}

    	
    }

    public function delete($id){
    	try {
    		Video::where('id',$id)->delete();
    		\Session::flash('success','data berhasil dihapus');
    	} catch (\Exception $e) {
    		
    	}

    	return redirect()->back();
    }
}
