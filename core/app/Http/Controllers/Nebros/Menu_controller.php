<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Parent_sub_menu;

class Menu_controller extends Controller
{
    public function get_menu($id){
    	$data = Parent_sub_menu::with('childs')->where('menu',$id)->get();

    	return response()->json(['data'=>$data]);
    }
}
