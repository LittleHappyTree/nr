<?php

namespace App\Http\Controllers\Admin;
ini_set('upload_max_filesize ', '4M');
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_banner;

use Image;
use Illuminate\Support\Facades\Input;

class Banner_controller extends Controller
{
    public function index(){
    	$data = M_banner::orderBy('urutan','asc')->paginate(10);
    	return view('admin.banner.index',compact('data'));
    }

    public function add(){
    	return view('admin.banner.add');
    }

    public function store(Request $request){
    	try {
    		$a = $request->except(['_token','_method','photo','dari','sampai','compress']);
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            $a['dari'] = date('Y-m-d',strtotime($request->dari));
            $a['sampai'] = date('Y-m-d',strtotime($request->sampai));
            $a['keterangan'] = $request->keterangan;
            $a['link'] = $request->link;
            // dd($a);
            $urutannya = $request->urutan;

    		$file = $request->file('photo');

            // get compress
            $lebar = Image::make(Input::file('photo'))->width();
            $resize = $request->compress;

            $persen = $resize / 100 * $lebar;

            $persen = $lebar - $persen;

    		$nama_gambar = $file->getClientOriginalName();
            // dd($nama_gambar);
                \Image::make(Input::file('photo'))->resize($persen, null, function($constraint) {
                    $constraint->aspectRatio();
                })->save('banners/'.$nama_gambar);
                
                // $file->move('banners',$file->getClientOriginalName());
                $a['photo'] = $nama_gambar;

            

            // store to database
            \DB::transaction(function()use($a,$request,$urutannya){
                $id = \DB::table('m_banner')->insertGetId($a);

                // get periode
                $dari = date('Y-m-d',strtotime($request->dari));
                $sampai = date('Y-m-d',strtotime($request->sampai));

                $periode = [];
                while ($dari <= $sampai) {
                    $pd = [];
                    $pd['m_banner'] = $id;
                    $pd['tanggal'] = $dari;

                    array_push($periode, $pd);
             
                    $dari = date('Y-m-d',strtotime('+1 days',strtotime($dari)));
                }

                \DB::table('m_banner_period')->where('m_banner',$id)->delete();

                \DB::table('m_banner_period')->insert($periode);

                // manage urutan
                $awal = $urutannya + 1;
                $urutans = M_banner::where('id','!=',$id)->where('urutan','>=',$awal)->orderBy('urutan','asc')->get();

                foreach ($urutans as $ut) {
                    // $urutan = $ut->urutan;
                    // $urutan_baru = $urutan + 1;

                    M_banner::where('id',$ut->id)->update(['urutan'=>$awal]);
                    $awal += 1;
                }

                if($request->link == null){
                     M_banner::where('id',$id)->update(['link'=>'banner/'.$id]);
                 }
               
            });

    		\Session::flash('sukses','data berhasil ditambah');

    		return redirect('admin/front/banner');
    	} catch (\Exception $e) {
            // dd($e->getMessage().'-'.$e->getLine());
    		\Session::flash('gagal',$e->getMessage());

    		return redirect()->route('add-banner');
    	}
    }

    public function edit($id){
    	try {
    		$dt = M_banner::where('id',$id)->first();
    		return view('admin.banner.edit',compact('dt'));
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    		return redirect('admin/front/banner');
    	}
    }

    public function update(Request $request,$id){
    	try {
    		$a = $request->except(['_token','_method','photo','urutan','compress']);
            $urutannya = $request->urutan;
    		// $a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            $a['urutan'] = $urutannya;

    		$file = $request->file('photo');
    		if($file){

                // get compress
                $lebar = Image::make(Input::file('photo'))->width();
                $resize = $request->compress;

                $persen = $resize / 100 * $lebar;

                $persen = $lebar - $persen;

                $nama_gambar = $file->getClientOriginalName();

                \Image::make(Input::file('photo'))->resize($persen, null, function($constraint) {
                    $constraint->aspectRatio();
                })->save('banners/'.$nama_gambar);

    			// $file->move('banners',$file->getClientOriginalName());
    			$a['photo'] = $nama_gambar;
    		}

            // get periode
            $dari = date('Y-m-d',strtotime($request->dari));
            $sampai = date('Y-m-d',strtotime($request->sampai));
            
            $a['dari'] = $dari;
            $a['sampai'] = $sampai;
            $a['keterangan'] = $request->keterangan;

            $periode = [];
            while ($dari <= $sampai) {
                $pd = [];
                $pd['m_banner'] = $id;
                $pd['tanggal'] = $dari;

                array_push($periode, $pd);
         
                $dari = date('Y-m-d',strtotime('+1 days',strtotime($dari)));
            }
            // dd($periode);


            
            

            // update dan insert data
    		// M_banner::where('id',$id)->update($a);
            \DB::transaction(function()use($a,$periode,$id,$urutannya){
                \DB::table('m_banner')->where('id',$id)->update($a);

                \DB::table('m_banner_period')->where('m_banner',$id)->delete();

                \DB::table('m_banner_period')->insert($periode);

                // manage urutan
                $awal = $urutannya + 1;
                $urutans = M_banner::where('id','!=',$id)->where('urutan','>=',$urutannya)->orderBy('urutan','asc')->get();

                foreach ($urutans as $ut) {
                    // $urutan = $ut->urutan;
                    // $urutan_baru = $urutan + 1;

                    M_banner::where('id',$ut->id)->update(['urutan'=>$awal]);
                    $awal += 1;
                }
            });

            // $data = M_banner::orderBy('urutan','asc')->get();
            // foreach ($data as $e=>$dt) {
            //     if($dt->id == $id){
            //         continue;
            //     }

            //     M_banner::where('id',$dt->id)->update(['urutan'=>$e+1]);
            // }

    		\Session::flash('sukses','data berhasil ditambah');

    		return redirect('admin/front/banner');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());

    		return redirect()->route('edit-banner',['id'=>$id]);
    	}
    }

    public function delete($id){
    	try {
    		M_banner::where('id',$id)->delete();

    		\Session::flash('sukses','data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect('admin/front/banner');
    }

    public function with_text($id){
        M_banner::where('id',$id)->update(['is_text'=>1]);
        \Session::flash('success','Data berhasil di update');

        return redirect()->back();
    }

    public function no_text($id){
        M_banner::where('id',$id)->update(['is_text'=>null]);
        \Session::flash('success','Data berhasil di update');

        return redirect()->back();
    }

    public function is_utama($id){
        M_banner::where('id',$id)->update(['is_utama'=>1]);
        \Session::flash('success','Data berhasil di update');

        return redirect()->back();
    }

    public function no_utama($id){
        M_banner::where('id',$id)->update(['is_utama'=>null]);
        \Session::flash('success','Data berhasil di update');

        return redirect()->back();
    }
}
