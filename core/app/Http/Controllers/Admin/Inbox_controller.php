<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pesan;

class Inbox_controller extends Controller
{
    public function index(){
    	$title = 'inbox';
    	$data = Pesan::orderBy('created_at','desc')->get();

    	return view('admin.inbox.index',compact('title','data'));
    }

    public function details($id){
    	$title = 'pesan';
    	Pesan::where('id',$id)->update(['status'=>1]);
    	$dt = Pesan::where('id',$id)->first();

    	return view('admin.inbox.details',compact('title','dt'));
    }
}
