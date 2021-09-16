<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Banner_event;
use App\Models\Banner_event_periode;

use Image;
use Illuminate\Support\Facades\Input;

class Banner_event_controller extends Controller
{
    public function index(){
    	$data = Banner_event::paginate(10);

    	return view('admin.banner_event.index',compact('data'));
    }

    public function add(){
    	$title = 'tambah event';

    	return view('admin.banner_event.add',compact('title'));
    }

    public function store(Request $request){
    	try {
    		$a['tanggal'] = date('Y-m-d',strtotime($request->tanggal));
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		$file = $request->file('photo');
    		$file->move('banner_event',$file->getClientOriginalName());
    		$a['photo'] = asset('banner_event/'.$file->getClientOriginalName());

    		Banner_event::insert($a);

    		\Session::flash('success', 'data berhasil ditambah');

    		return redirect('admin/banner-event');
    	} catch (\Exception $e) {
    		\Session::flash('error', $e->getMessage());
    		return redirect('admin/banner-event/add');
    	}
    }

    public function edit($id){
    	$dt = Banner_event::where('id',$id)->first();

    	return view('admin.banner_event.edit',compact('dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a['tanggal'] = date('Y-m-d',strtotime($request->tanggal));
    		// $a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            $dari = date('Y-m-d',strtotime($request->dari));
            $sampai = date('Y-m-d',strtotime($request->sampai));

            $a['dari'] = $dari;
            $a['sampai'] = $sampai;

    		$file = $request->file('photo');
    		if($file){
                $nama_gambar = $file->getClientOriginalName();

                \Image::make(Input::file('photo'))->resize(700, null, function($constraint) {
                    $constraint->aspectRatio();
                })->save('banner_event/'.$nama_gambar);

    			// $file->move('banner_event',$file->getClientOriginalName());
    			$a['photo'] = $nama_gambar;
    		}

            $periodes = [];

            while ($dari <= $sampai) {
                $b = [];
                $b['banner_event'] = $id;
                $b['tanggal'] = $dari;

                array_push($periodes, $b);
         
                $dari = date('Y-m-d',strtotime('+1 days',strtotime($dari)));
            }

    		\DB::transaction(function()use($id,$a,$periodes){
                \DB::table('banner_event')->where('id',$id)->update($a);

                \DB::table('banner_event_periode')->where('banner_event',$id)->delete();

                \DB::table('banner_event_periode')->insert($periodes);
            });

    		\Session::flash('success', 'data berhasil diupdate');

    		return redirect('admin/banner-event');
    	} catch (\Exception $e) {
    		\Session::flash('error', $e->getMessage());
    		return redirect('admin/banner-event/'.$id);
    	}
    }

    public function delete($id){
    	try {
    		Banner_event::where('id',$id)->delete();
    		\Session::flash('success','data berhasil dihapus');
    	} catch (\Exception $e) {
    		
    		\Session::flash('error',$e->getMessage());
    	}

    	return redirect('admin/banner-event');
    }
}
