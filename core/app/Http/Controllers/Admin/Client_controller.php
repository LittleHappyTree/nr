<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_client;

use Image;
use Illuminate\Support\Facades\Input;

class Client_controller extends Controller
{
    public function index(){
    	$title = 'Manage Client';
    	$data = M_client::orderBy('nama','asc')->paginate(10);

    	return view('admin.client.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah Client';
    	// $data = M_client::orderBy('nama','asc')->paginate(10);

    	return view('admin.client.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;

    		$file = $request->file('photo');

    		$nama_gambar = $file->getClientOriginalName();
    		\Image::make(Input::file('photo'))->resize(115, null, function($constraint) {
                    $constraint->aspectRatio();
                })->save('client_images/'.$nama_gambar);

    		$a['photo'] = $nama_gambar;
    		$a['created_at'] = date('Y-m-d H:i:s');

    		M_client::insert($a);
    		\Session::flash('success','Data berhasil ditambah');

    	} catch (\Exception $e) {
    		dd($e->getMessage());
    		\Session::flash('gagal',$e->getMessage());
    	}
    	return redirect()->back();
    }

    public function edit($id){
    	$dt = M_client::find($id);
    	$title = "Edit Client $dt->nama";
    	// $data = M_client::orderBy('nama','asc')->paginate(10);

    	return view('admin.client.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['nama'] = $request->nama;

    		$file = $request->file('photo');

    		if($file){
    			$nama_gambar = $file->getClientOriginalName();
	    		\Image::make(Input::file('photo'))->resize(115, null, function($constraint) {
	                    $constraint->aspectRatio();
	                })->save('client_images/'.$nama_gambar);

	    		$a['photo'] = $nama_gambar;
    		}

    		$a['updated_at'] = date('Y-m-d H:i:s');

    		M_client::where('id',$id)->update($a);
    		\Session::flash('success','Data berhasil ditambah');

    	} catch (\Exception $e) {
    		dd($e->getMessage());
    		\Session::flash('gagal',$e->getMessage());
    	}
    	return redirect()->back();
    }

    public function delete($id){
    	try {
    		M_client::where('id',$id)->delete();
    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
