<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Banner_page;

use Image;
use Illuminate\Support\Facades\Input;

class Banner_page_controller extends Controller
{
    public function index(){
    	$title = 'Banner Page';
    	$data = Banner_page::orderBy('created_at','desc')->paginate(10);

    	return view('admin.banner_page.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah Bnner Page';

    	return view('admin.banner_page.add',compact('title'));
    }

    public function store(Request $request){
    	try {
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
                })->save('banner_page/'.$nama_gambar);
                
            // $file->move('banners',$file->getClientOriginalName());
            $a['photo'] = $nama_gambar;

            $base_path = url('/');
            // dd($base_path);
            $url = str_replace('www.', '', $request->url);
            $url = str_replace('/en', '', $url);
            $url = explode($base_path, $url);
            // dd($url);
            $url = explode('/', $url[1]);
            $url = $url[1];

            $a['url'] = $url;
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		Banner_page::insert($a);

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		// dd($e->getMessage().'-'.$e->getLine());
    		\Session::flash('gagal',$e->getMessage());

    	}

    	return redirect()->back();
    }

    public function edit($id){
        $dt = Banner_page::find($id);
        $title = "Edit Banner Page";

        return view('admin.banner_page.edit',compact('title','dt'));
    }

    public function update(Request $request,$id){
        try {
            $file = $request->file('photo');

            // get compress
            if($file){
                $lebar = Image::make(Input::file('photo'))->width();
                $resize = $request->compress;

                $persen = $resize / 100 * $lebar;

                $persen = $lebar - $persen;

                $nama_gambar = $file->getClientOriginalName();
                // dd($nama_gambar);
                    \Image::make(Input::file('photo'))->resize($persen, null, function($constraint) {
                        $constraint->aspectRatio();
                    })->save('banner_page/'.$nama_gambar);
                    
                // $file->move('banners',$file->getClientOriginalName());
                $a['photo'] = $nama_gambar;
            }

            if(strpos($request->url, 'http') !== false){
                $base_path = url('/');
                // dd($base_path);
                $url = $request->url;
                $url = explode($base_path, $url);
                // dd($url);
                $url = explode('/', $url[1]);
                $url = $url[1];

                $a['url'] = $url;
            }

            // $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');

            Banner_page::where('id',$id)->update($a);

            \Session::flash('success','Data berhasil diupdate');
        } catch (\Exception $e) {
            dd($e->getMessage());
            \Session::flash('gagal',$e->getMessage());

        }

        return redirect()->back();
    }

    public function delete($id){
    	try {
    		Banner_page::where('id',$id)->delete();
    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}
    	return redirect()->back();
    }
}
