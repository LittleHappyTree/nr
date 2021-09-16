<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use App\Models\Gallery_photo;

class Gallery_controller extends Controller
{
    public function index($kat){
        if($kat == 'gallery'){
            
            if(\App::getLocale() == 'id'){
                $title = 'Galeri';
            }else{
                $title = 'Gallery';
            }

        }elseif ($kat == 'diklat') {
            
            if(\App::getLocale() == 'id'){
                $title = 'Diklat';
            }else{
                $title = 'Training';
            }

        }else{
            $title = 'Corporate Social Responsibility';
        }
    	
    	$data = Gallery::with('photos_one')->where('kategori',$kat)->orderBy('created_at','desc')->paginate(9);

    	return view('nebros.gallery.index',compact('title','data'));
    }

    public function index_gallery(){
        if(\App::getLocale() == 'id'){
                $title = 'Galeri';
            }else{
                $title = 'Gallery';
            }
        
        $data = Gallery::with('photos_one')->where('kategori','gallery')->orderBy('created_at','desc')->paginate(9);

        return view('nebros.gallery.index',compact('title','data'));
    }

    public function index_diklat(){
        if(\App::getLocale() == 'id'){
                $title = 'Diklat';
            }else{
                $title = 'Training';
            }
        
        $data = Gallery::with('photos_one')->where('kategori','diklat')->orderBy('created_at','desc')->paginate(9);

        return view('nebros.gallery.index',compact('title','data'));
    }

    public function index_csr(){
        $title = 'Corporate Social Responsibility';
        
        $data = Gallery::with('photos_one')->where('kategori','csr')->orderBy('created_at','desc')->paginate(9);

        return view('nebros.gallery.index',compact('title','data'));
    }

    public function detail($id){
    	$data = Gallery::with('photos_many')->where('id',$id)->first();;
        $title = "Gallery $data->judul";
    	// dd($data);
    	return view('nebros.gallery.detail',compact('title','data'));
    }
}
