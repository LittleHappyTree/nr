<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use App\Models\M_banner;

use Image;
use Illuminate\Support\Facades\Input;

class Gallery_controller extends Controller
{
    public function index(){
    	$title = 'Manage Gallery';
    	$data = Gallery::orderBy('created_at','desc')->paginate(10);

    	return view('admin.gallery.index_new',compact('title','data'));
    }

    public function jadi_banner($id){
      try {
        $dt = Gallery::with('photos_one')->find($id);
        $photo_one = $dt->photos_one->photo;

        $a['photo'] = $photo_one;
        $a['nama_kecil'] = $dt->judul;
        // $a['urutan'] = 1;
        $a['dari'] = date('Y-m-d');
        $a['sampai'] = date('Y-m-d',strtotime('+7 days'));
        $a['link'] = 'gallery/'.$id;
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

        \File::copy('gallery_images/'.$photo_one, 'banners/'.$photo_one);

        \Session::flash('success','Berhasil dijadikan banner, silahkan cek di menu banner');
      } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage());
      }
      return redirect()->back();
    }

    public function add(){
    	$title = 'tambah gallery';

    	return view('admin.gallery.add_new',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['keterangan'] = $request->keterangan;
            $a['keterangan_en'] = $request->keterangan_en;
    		$files = $request->file('photo');

    		$photos = [];
    		foreach ($files as $fl) {
    			
    			$lebar = Image::make($fl)->width();
    			// dd($lebar);
	    		$resize = $request->resize;

	    		$persen = $resize / 100 * $lebar;

	    		$persen = $lebar - $persen;

	    		$nama_gambar = date('YmdHis').rand().$fl->getClientOriginalName();
	    		array_push($photos, $nama_gambar);

	    		\Image::make($fl)->resize($persen, null, function($constraint) {
		            $constraint->aspectRatio();
		        })->save('gallery_images/'.$nama_gambar);

    		}

	        $a['photo'] = '-';
	        $a['created_at'] = date('Y-m-d H:i:s');
	        $a['updated_at'] = date('Y-m-d H:i:s');
	        $a['judul'] = $request->judul;
            $a['judul_en'] = $request->judul_en;
            $a['kategori'] = $request->kategori;
            $a['meta_keyword'] = $request->meta_keyword;
            $a['meta_description'] = $request->meta_description;
            $a['created_by'] = \Auth::user()->email;
            $a['updated_by'] = \Auth::user()->email;

	        \DB::transaction(function()use($a,$photos){
	        	$idd = \DB::table('gallery')->insertGetId($a);

	        	$pts=[];
	        	foreach ($photos as $pt) {
	        		$b = [];
	        		$b['gallery'] = $idd;
	        		$b['photo'] = $pt;

	        		array_push($pts, $b);
	        	}

	        	\DB::table('gallery_photo')->insert($pts);
	        });

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		$pesan = $e->getMessage().' - '.$e->getLine();
    		dd($pesan);
    		return redirect()->back();
    	}
    	return redirect()->back();
    }

    public function edit($id){
    	$title = 'Edit Gallery';
    	$dt = Gallery::find($id);

    	return view('admin.gallery.edit_new',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['keterangan'] = $request->keterangan;
            $a['keterangan_en'] = $request->keterangan_en;
            $files = $request->file('photo');
            // dd($files);
            $photos = [];
            if($files){
                foreach ($files as $fl) {
                    // dd($fl);
                    $lebar = Image::make($fl)->width();
                    // dd($lebar);
                    $resize = $request->resize;

                    $persen = $resize / 100 * $lebar;

                    $persen = $lebar - $persen;

                    $nama_gambar = date('YmdHis').rand().$fl->getClientOriginalName();
                    // dd($nama_gambar);
                    array_push($photos, $nama_gambar);

                    \Image::make($fl)->resize($persen, null, function($constraint) {
                        $constraint->aspectRatio();
                    })->save('gallery_images/'.$nama_gambar);

                }
            }
            // dd($photos);
            $a['photo'] = '-';
            // $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');
            $a['judul'] = $request->judul;
            $a['judul_en'] = $request->judul_en;
            $a['kategori'] = $request->kategori;
            $a['meta_keyword'] = $request->meta_keyword;
            $a['meta_description'] = $request->meta_description;
            $a['updated_by'] = \Auth::user()->email;

            \DB::transaction(function()use($a,$photos,$id,$files){
                // dd(count($photos));
                $idd = \DB::table('gallery')->where('id',$id)->update($a);

                if(count($photos) > 0){
                    $pts=[];
                    foreach ($photos as $pt) {
                        $b = [];
                        $b['gallery'] = $id;
                        $b['photo'] = $pt;

                        array_push($pts, $b);
                    }

                    \DB::table('gallery_photo')->where('gallery',$id)->delete();
                    \DB::table('gallery_photo')->insert($pts);
                }
            });

            \Session::flash('success','Data berhasil diupdate');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

        return redirect()->back();
    }

    public function delete($id){
    	try {
    		Gallery::where('id',$id)->delete();

    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    	}
    	return redirect()->back();
    }
}
