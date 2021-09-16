<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Video;

class Video_controller extends Controller
{
    public function index(){
    	$title = 'List Video';
    	$data = Video::orderBy('created_at','desc')->get();

    	return view('nebros.video.index',compact('title','data'));
    }
}
