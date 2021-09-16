<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_dewan_komisaris;

class Dewan_komisaris_controller extends Controller
{
    public function index(){
    	$title = 'Manage Dewan Komisaris';
    	$data = M_dewan_komisaris::orderBy('updated_at','desc')->paginate(15);
        $dt = M_dewan_komisaris::first();

    	return view('admin.dewan_komisaris.index',compact('title','data','dt'));
    }

    public function update_title(Request $request){
        try {
            \DB::table('m_dewan_komisaris')->update([
                'title'=>$request->title,
                'title_en'=>$request->title_en
            ]);

            \Session::flash('success','Data berhasil di simpan');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function add(){
    	$title = 'Tambah Dewan Komisaris';

    	return view('admin.dewan_komisaris.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;
    		$a['jabatan'] = $request->jabatan;
    		$a['jabatan_en'] = $request->jabatan_en;
    		$a['keterangan'] = $request->keterangan;
    		$a['keterangan_en'] = $request->keterangan_en;
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		$file = $request->file('photo');
    		if($file){
    			$nama_gambar = date('YmdHis').$file->getClientOriginalName();
    			$file->move('dewan_komisaris_image',$nama_gambar);
    			$a['photo'] = 'dewan_komisaris_image/'.$nama_gambar;
    		}

    		M_dewan_komisaris::insert($a);
    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function edit($id){
        $title = 'Edit Dewan Komisaris';
        $dt = M_dewan_komisaris::find($id);

        return view('admin.dewan_komisaris.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
        try {
            $a['nama'] = $request->nama;
            $a['jabatan'] = $request->jabatan;
            $a['jabatan_en'] = $request->jabatan_en;
            $a['keterangan'] = $request->keterangan;
            $a['keterangan_en'] = $request->keterangan_en;
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');

            $file = $request->file('photo');
            if($file){
                $nama_gambar = date('YmdHis').$file->getClientOriginalName();
                $file->move('dewan_komisaris_image',$nama_gambar);
                $a['photo'] = 'dewan_komisaris_image/'.$nama_gambar;
            }

            M_dewan_komisaris::where('id',$id)->update($a);

            \Session::flash('success','Data berhasil diupdate');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function delete($id){
        try {
            M_dewan_komisaris::where('id',$id)->delete();
            \Session::flash('success','Data berhasil dihapus');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
}
