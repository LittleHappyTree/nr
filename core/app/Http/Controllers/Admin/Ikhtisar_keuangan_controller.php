<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;
use Illuminate\Support\Facades\Input;

use App\Models\Ikhtisar_keuangan;

class Ikhtisar_keuangan_controller extends Controller
{
    public function index(){
    	$title = 'Ikhtisar Keuangan';
    	$dt = Ikhtisar_keuangan::first();

    	return view('admin.ikhtisar_keuangan.index',compact('title','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['title_id'] = $request->title_id;
    		$a['title_en'] = $request->title_en;

    		$file = $request->file('photo');
    		if($file){
    			$lebar = Image::make($file)->width();
    			// dd($lebar);
	    		$resize = $request->compress;

	    		$persen = $resize / 100 * $lebar;

	    		$persen = $lebar - $persen;

	    		$nama_gambar = date('YmdHis').rand().$file->getClientOriginalName();
	    		// array_push($photos, $nama_gambar);

	    		\Image::make($file)->resize($persen, null, function($constraint) {
		            $constraint->aspectRatio();
		        })->save('ikhtisar_keuangan_images/'.$nama_gambar);

		        $a['photo'] = 'ikhtisar_keuangan_images/'.$nama_gambar;
    		}

    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		Ikhtisar_keuangan::where('id',$id)->update($a);

    		\Session::flash('success','Data berhasil disimpan');

    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}
    	return redirect()->back();
    }
}
