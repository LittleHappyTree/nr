<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Marquee;
use App\Models\Marquee_periode;
use App\Models\Marquee_client;
use App\Models\M_client;

class Marquee_controller extends Controller
{
    public function index(){
    	$title = 'Marquee';
    	$dt = Marquee::with('clients')->first();
    	$clients = Marquee_client::orderBy('nama','asc')->get();

    	return view('admin.marquee.index',compact('title','dt','clients'));
    }

    public function store(Request $request,$marquee){
        try {
            $dari = date('Y-m-d',strtotime($request->dari));
            $sampai = date('Y-m-d',strtotime($request->sampai));

            $a['keterangan'] = $request->keterangan;
            $a['dari'] = $dari;
            $a['sampai'] = $sampai;
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');
            
            $tanggal1 = date('Y-m-d',strtotime($request->dari));
            $tanggal2 = date('Y-m-d',strtotime($request->sampai));
            
            $periodes = [];
            while ($tanggal1 <= $tanggal2) {
                $period['marquee'] = $marquee;
                $period['tanggal'] = date('Y-m-d',strtotime($tanggal1));
                array_push($periodes, $period);
         
                $tanggal1 = date('Y-m-d',strtotime('+1 days',strtotime($tanggal1)));
            }

            \DB::transaction(function()use($a,$periodes,$marquee){
                \DB::table('marquee')->update($a);

                \DB::table('marquee_periode')->where('marquee',$marquee)->delete();
                \DB::table('marquee_periode')->insert($periodes);
            });

            \Session::flash('success','Data berhasil disimpan');

        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function add_client(Request $request,$id){
    	try {
    		$a['marquee'] = $id;
    		$a['nama'] = $request->nama;
            $a['tanggal'] = date('Y-m-d',strtotime($request->tanggal));

    		Marquee_client::insert($a);

    		\Session::flash('success','Data berhasil ditambah');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }

    public function delete_client(Request $request,$id){
    	try {
    		Marquee_client::where('id',$id)->delete();

    		\Session::flash('success','Data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('gagal',$e->getMessage());
    	}

    	return redirect()->back();
    }
}
