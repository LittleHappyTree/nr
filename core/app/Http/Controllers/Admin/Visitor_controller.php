<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Visitor_controller extends Controller
{
    public function index(){
    	// $vt = \Visitor::all(true);
    	// dd($vt);
    	$date_start = date('Y-m-d',strtotime('-7 days'));
    	$date_end = date('Y-m-d');
    	$title = "Dashboard analytics ".date('d M Y',strtotime($date_start))." - ".date('d M Y',strtotime($date_end))."";

    	$range = \Visitor::range($date_start, $date_end);
    	$unique = \Visitor::count();

    	return view('admin.visitor.index',compact('title','range','unique'));
    }
}
