<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_footer_logo;

class Footer_logo_controller extends Controller
{
    public function index(){
    	$data = M_footer_logo::orderBy('created_at','asc')->get();

    	return view('admin.footer_logo.index',compact('data'));
    }

    public function add(){
    	return view('admin.footer_logo.add');
    }

    public function store(Request $request){
    	try {
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            $a['link'] = $request->link;

    		$file = $request->file('photo');
    		$file->move('footer_logo',$file->getClientOriginalName());

    		$a['photo'] = 'footer_logo/'.$file->getClientOriginalName();

    		M_footer_logo::insert($a);

    		\Session::flash('sukses','Data berhasil di insert');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect('admin/front/footer/logo');
    }

    public function delete($id){
        try {
            M_footer_logo::where('id',$id)->delete();

            \Session::flash('success','Data berhasil dihapus');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
}
