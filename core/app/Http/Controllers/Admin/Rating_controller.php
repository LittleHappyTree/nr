<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_rating;
use App\Models\M_banner;

class Rating_controller extends Controller
{
    public function index(){
    	$title = 'Master Rating';
    	$data = M_rating::orderBy('created_at','desc')->paginate(15);

    	return view('admin.rating.index',compact('title','data'));
    }

    public function jadi_banner($id){
      try {
        $dt = M_rating::find($id);
        $path_asli = $dt->photo;

        $path = str_replace('rating_images/', '', $path_asli);

        $a['photo'] = $path;
        $a['nama_kecil'] = $dt->nama;
        // $a['urutan'] = 1;
        $a['dari'] = date('Y-m-d');
        $a['sampai'] = date('Y-m-d',strtotime('+7 days'));
        $a['link'] = 'rating';
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

    public function add(){
    	$title = 'tambah rating';

    	return view('admin.rating.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;
            $a['nama_en'] = $request->nama_en;
    		$a['link'] = $request->link;
    		$a['created_at'] = date('Y-m-d H:i:s');

    		$file = $request->file('photo');
    		if($file){
                $nama_gambar = date('YmdHis').rand().$file->getClientOriginalName();
    			$file->move('rating_images',$nama_gambar);

    			$a['photo'] = 'rating_images/'.$nama_gambar;

    		}

    		M_rating::insert($a);

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage().'-'.$e->getLine());
    	}

    	return redirect()->back();
    }

    public function edit($id){
        $dt = M_rating::find($id);
        $title = "Edit rating $dt->nama";

        return view('admin.rating.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
        try {
            $a['nama'] = $request->nama;
            $a['nama_en'] = $request->nama_en;
            $a['link'] = $request->link;
            // $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');

            $file = $request->file('photo');
            if($file){
                $nama_gambar = date('YmdHis').rand().$file->getClientOriginalName();
                $file->move('rating_images',$nama_gambar);

                $a['photo'] = 'rating_images/'.$nama_gambar;

            }

            M_rating::where('id',$id)->update($a);

            \Session::flash('success','Data berhasil diupdate');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage().'-'.$e->getLine());
        }

        return redirect()->back();
    }

    public function delete($id){
    	try {
    		M_rating::where('id',$id)->delete();

    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
