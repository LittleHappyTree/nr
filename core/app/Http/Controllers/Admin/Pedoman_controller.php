<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_pedoman;

class Pedoman_controller extends Controller
{
    public function index(){
    	$title = 'Pedoman Perusahaan';
    	$data = M_pedoman::orderBy('created_at','desc')->paginate(15);

    	return view('admin.pedoman.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah pedoman';

    	return view('admin.pedoman.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;
    		$a['nama_en'] = $request->nama_en;

    		$file = $request->file('pedoman');
    		$nama_file = date('YmdHis').$file->getClientOriginalName();
    		$file->move('pedoman_file',$nama_file);
    		$a['file'] = 'pedoman_file/'.$nama_file;
    		$a['created_at'] = date('Y-m-d H:i:s');

    		M_pedoman::insert($a);

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function edit($id){
    	$dt = M_pedoman::find($id);
    	$title = "Edit pedoman $dt->nama";

    	return view('admin.pedoman.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['nama'] = $request->nama;
    		$a['nama_en'] = $request->nama_en;

    		$file = $request->file('pedoman');
    		if($file){
    			$nama_file = date('YmdHis').$file->getClientOriginalName();
	    		$file->move('pedoman_file',$nama_file);
	    		$a['file'] = 'pedoman_file/'.$nama_file;
	    		$a['created_at'] = date('Y-m-d H:i:s');
    		}

    		M_pedoman::where('id',$id)->update($a);

    		\Session::flash('success','Data berhasil diupdate');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function delete($id){
    	try {
    		M_pedoman::where('id',$id)->delete();

    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}
    	return redirect()->back();
    }
}
