<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Blog;
use App\Bcategory;
use App\Models\Gallery;
use App\Models\Video;

class Portal_controller extends Controller
{
    public function index(){
    	$data = Blog::with(['bcategory','blurs'])->where('status',1)->orderBy('created_at','desc')->paginate(15);
    	$featured = Blog::with(['bcategory','blurs'])->where('is_featured',1)->orderBy('created_at','desc')->get();
        // dd($featured);
        if(\App::getLocale() == 'id'){
            $title = 'Berita';
        }else{
            $title = 'News';
        }

    	return view('nebros.portal.index',compact('data','featured','title'));
    }

    public function index_banner($kata){
        $data = Blog::with(['bcategory','blurs'])->where('status',1)->where('meta_keywords','like','%nimble%')
        ->orWhere('meta_keywords','like','%achievement%')
        ->orWhere('meta_keywords','like','%spiritful%')
        ->orWhere('meta_keywords','like','%reliable%')
        ->orWhere('meta_keywords','like','%excellent%')
        ->orWhere('meta_description','like','%'.$kata.'%')->orderBy('created_at','desc')->paginate(5);

        $featured = Blog::with(['bcategory','blurs'])->where('is_featured',1)->where('meta_keywords','like','%nimble%')
        ->orWhere('meta_keywords','like','%achievement%')
        ->orWhere('meta_keywords','like','%spiritful%')
        ->orWhere('meta_keywords','like','%reliable%')
        ->orWhere('meta_keywords','like','%excellent%')
        ->orWhere('meta_description','like','%'.$kata.'%')->orderBy('created_at','desc')->get();
        // dd($featured);
        $title = "News";
        $katas = $kata;

        $gallery = Gallery::with('photos_one')->where('meta_keyword','like','%nimble%')
        ->orWhere('meta_keyword','like','%achievement%')
        ->orWhere('meta_keyword','like','%spiritful%')
        ->orWhere('meta_keyword','like','%reliable%')
        ->orWhere('meta_keyword','like','%excellent%')
        ->orWhere('meta_description','like','%'.$kata.'%')->orderBy('created_at','desc')->paginate(9);

        $videos = Video::where('meta_keywords','like','%nimble%')
        ->orWhere('meta_keywords','like','%achievement%')
        ->orWhere('meta_keywords','like','%spiritful%')
        ->orWhere('meta_keywords','like','%reliable%')
        ->orWhere('meta_keywords','like','%excellent%')
        ->orWhere('meta_description','like','%'.$kata.'%')->orderBy('created_at','desc')->paginate(9);

        return view('nebros.portal.index_banner',compact('data','featured','title','katas','gallery','videos'));
    }

    public function detail($slug){
        $url = url('portal/'.$slug);
        $fb = \Share::page($url, 'Share title')
                ->facebook()
                ->twitter()
                ->linkedin('Extra linkedin summary can be passed here')
                ->whatsapp();            // dd($fb);

    	$dt = Blog::with(['bcategory','blurs'])->where('slug',$slug)->orderBy('created_at','desc')->first();
        $title = $dt->title;
    	$kategori = Bcategory::get();

    	return view('nebros.portal.detail',compact('dt','kategori','fb','title','url'));
    }
}
