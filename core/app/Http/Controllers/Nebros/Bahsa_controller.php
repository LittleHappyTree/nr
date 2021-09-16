<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bahsa_controller extends Controller
{
    public function index($bahasa){
    	$path = url()->current();
    	dd($path);
    }
}
