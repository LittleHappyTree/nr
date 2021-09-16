<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_medsos;

class Medsos_controller extends Controller
{
    public function index(){
    	$data = M_medsos::orderBy('created_at','desc')->get();
    	return view('admin.medsos.index',compact('data'));
    }

    public function add(){
    	return view('admin.medsos.add');
    }

    public function store(Request $request){
    	try {
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		$file = $request->file('photo');
    		$file->move('medsos',$file->getClientOriginalName());

    		$a['photo'] = asset('medsos/'.$file->getClientOriginalName());
    		$a['link'] = $request->link;

    		M_medsos::insert($a);

    		\Session::flash('sukses','data berhasil ditambah');

    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect('admin/front/medsos');
    }

    public function edit($id){
    	$dt = M_medsos::where('id',$id)->first();
    	return view('admin.medsos.edit',compact('dt'));
    }

    public function update(Request $request,$id){
    	try {
    		// $a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		$file = $request->file('photo');
    		if($file){
    			$file->move('medsos',$file->getClientOriginalName());

    			$a['photo'] = asset('medsos/'.$file->getClientOriginalName());
    		}

    		$a['link'] = $request->link;
            $a['nama'] = $request->nama;

    		M_medsos::where('id',$id)->update($a);

    		\Session::flash('sukses','data berhasil diupdate');

    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect('admin/front/medsos');
    }
}
