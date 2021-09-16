<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_dewan_pengawas_syariah;

class Dewan_syariah_controller extends Controller
{
    public function index(){
    	$title = 'Manage Dewan Pengawas Syariah';
    	$data = M_dewan_pengawas_syariah::orderBy('updated_at','desc')->paginate(15);
        $dt = M_dewan_pengawas_syariah::first();

    	return view('admin.dewan_syariah.index',compact('title','data','dt'));
    }

    public function update_title(Request $request){
        try {
            \DB::table('m_dewan_pengawas_syariah')->update([
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
    	$title = 'Tambah Dewan Pengawas Syariah';

    	return view('admin.dewan_syariah.add',compact('title'));
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
    			$file->move('dewan_syariah_image',$nama_gambar);
    			$a['photo'] = 'dewan_syariah_image/'.$nama_gambar;
    		}

    		M_dewan_pengawas_syariah::insert($a);
    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function edit($id){
        $title = 'Edit Dewan Pengawas Syariah';
        $dt = M_dewan_pengawas_syariah::find($id);

        return view('admin.dewan_syariah.edit',compact('title','dt'));
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
                $file->move('dewan_syariah_image',$nama_gambar);
                $a['photo'] = 'dewan_syariah_image/'.$nama_gambar;
            }

            M_dewan_pengawas_syariah::where('id',$id)->update($a);

            \Session::flash('success','Data berhasil diupdate');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function delete($id){
        try {
            M_dewan_pengawas_syariah::where('id',$id)->delete();
            \Session::flash('success','Data berhasil dihapus');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
}
