<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Addr;

use App\Models\Pesan;

class Contact_controller extends Controller
{
    public function index(){
    	if(\App::getLocale() == 'id'){
            $title = 'Hubungi Kami';
        }else{
            $title = 'Contact Us';
        }

    	$dt = Addr::first();

    	return view('nebros.contact.index',compact('title','dt'));
    }

    public function store(Request $request){
    	try {
    		$a['nama'] = $request->nama;
    		$a['email'] = $request->email;
    		$a['pesan'] = $request->pesan;
    		$a['created_at'] = date('Y-m-d H:i:s');

    		Pesan::insert($a);

    		\Session::flash('sukses','Pesan berhasil dikirim');
    	} catch (\Exception $e) {
    		
    	}

    	return redirect()->back();
    }
}
