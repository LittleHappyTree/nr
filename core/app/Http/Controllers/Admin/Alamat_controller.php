<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Addr;

class Alamat_controller extends Controller
{
    public function index(){
    	$title = 'manage alamat';
    	$dt = Addr::with(['alamats','emails','faxs','no_telps'])->first();
    	
    	return view('admin.alamat.index',compact('title','dt'));
    }

    public function update(Request $request){
    	try {
    		$alamat = $request->alamat;
    		$iframe = $request->iframe;
    		$email = $request->email;
    		$dt = Addr::first();
    		$addr = $dt->id;

    		$a['nama'] = $alamat;
    		$a['iframe'] = $iframe;

    		$b['nama'] = $email;

    		\DB::transaction(function()use($addr,$a,$b){
    			\DB::table('addr_alamat')->where('addr',$addr)->update($a);
    			\DB::table('addr_email')->where('addr',$addr)->update($b);
    		});
    	} catch (\Exception $e) {
    		// dd($e->getMessage());
    	}
    	return redirect()->back();
    }

    public function add_telp(Request $req){
    	try {
    		$dt = Addr::first();

    		\DB::table('addr_no_telp')->insert([
    			'addr'=>$dt->id,
    			'nama'=>$req->nama
    		]);
    	} catch (\Exception $e) {
    		
    	}

    	return redirect()->back();
    }

    public function delete_telp($id){
    	try {
    		\DB::table('addr_no_telp')->where('id',$id)->delete();
    	} catch (\Exception $e) {
    		
    	}
    	return redirect()->back();
    }

    public function add_fax(Request $req){
    	try {
    		$dt = Addr::first();

    		\DB::table('addr_fax')->insert([
    			'addr'=>$dt->id,
    			'nama'=>$req->nama
    		]);
    	} catch (\Exception $e) {
    		
    	}

    	return redirect()->back();
    }

    public function delete_fax($id){
    	try {
    		\DB::table('addr_fax')->where('id',$id)->delete();
    	} catch (\Exception $e) {
    		
    	}
    	return redirect()->back();
    }
}
