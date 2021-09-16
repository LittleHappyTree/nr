<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_laporan_tahunan;
use App\Models\M_banner;

class Laporan_tahunan_controller extends Controller
{
    public function index(){
    	$title = 'Laporan tahunan';
    	$data = M_laporan_tahunan::orderBy('tahun','desc')->paginate(15);

    	return view('admin.laporan_tahunan.index',compact('title','data'));
    }

    public function jadi_banner($id){
      try {
        $dt = M_laporan_tahunan::find($id);
        $path_asli = $dt->photo;

        $path = str_replace('galeri_laporan_tahunan/', '', $path_asli);

        $a['photo'] = $path;
        $a['nama_kecil'] = $dt->nama;
        // $a['urutan'] = 1;
        $a['dari'] = date('Y-m-d');
        $a['sampai'] = date('Y-m-d',strtotime('+7 days'));
        $a['link'] = 'laporan-tahunan';
        $a['is_text'] = 1;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_banner::insert($a);

        $awal = 1 + 1;
                // $urutans = M_banner::where('id','!=',$id)->where('urutan','>=',2)->orderBy('urutan','asc')->get();

                // foreach ($urutans as $ut) {
                //     // $urutan = $ut->urutan;
                //     // $urutan_baru = $urutan + 1;

                //     M_banner::where('id',$ut->id)->update(['urutan'=>$awal]);
                //     $awal += 1;
                // }

        \File::copy($path_asli, 'banners/'.$path);

        \Session::flash('success','Berhasil dijadikan banner, silahkan cek di menu banner');
      } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage());
      }
      return redirect()->back();
    }

    public function index_tahunan(){
    	$title = 'Laporan tahunan';
    	$data = M_laporan_tahunan::where('kategori',1)->orderBy('tahun','desc')->paginate(15);

    	return view('admin.laporan_tahunan.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah Laporan Tahunan';

    	return view('admin.laporan_tahunan.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;

    		$tahun = $request->tahun;
    		$a['tahun'] = $tahun.'-'.date('m-d');

    		$a['kategori'] = $request->kategori;
            $a['created_at'] = date('Y-m-d H:i:s');

    		$files = $request->file('files');
    		if($files){
                $nama_file = date('YmdHis').'.'.$files->getClientOriginalExtension();

    			$files->move('galeri_laporan_tahunan',$nama_file);
    			$a['file'] = 'galeri_laporan_tahunan/'.$nama_file;
    		}

    		$photos = $request->file('photo');
    		if($photos){
    			$photos->move('galeri_laporan_tahunan',$photos->getClientOriginalName());
    			$a['photo'] = 'galeri_laporan_tahunan/'.$photos->getClientOriginalName();
    		}

    		M_laporan_tahunan::insert($a);

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function edit($id){
    	$dt = M_laporan_tahunan::find($id);
    	$title = "Edit Laporan $dt->nama";

    	return view('admin.laporan_tahunan.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['nama'] = $request->nama;

    		$tahun = $request->tahun;
    		$a['tahun'] = $tahun.'-'.date('m-d');

    		$a['kategori'] = $request->kategori;
            $a['updated_at'] = date('Y-m-d H:i:s');

    		$files = $request->file('files');
    		if($files){
                $nama_file = date('YmdHis').'.'.$files->getClientOriginalExtension();
    			$files->move('galeri_laporan_tahunan',$nama_file);
    			$a['file'] = 'galeri_laporan_tahunan/'.$nama_file;
    		}

    		$photos = $request->file('photo');
    		if($photos){
    			$photos->move('galeri_laporan_tahunan',$photos->getClientOriginalName());
    			$a['photo'] = 'galeri_laporan_tahunan/'.$photos->getClientOriginalName();
    		}

    		M_laporan_tahunan::where('id',$id)->update($a);

    		\Session::flash('success','Data berhasil diupdate');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function delete($id){
    	try {
    		M_laporan_tahunan::where('id',$id)->delete();

    		\Session::flash('success laporan tahunan berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
