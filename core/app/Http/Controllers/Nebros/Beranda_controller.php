<?php

namespace App\Http\Controllers\Nebros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\M_banner;
use App\Models\Banner_event;
use App\Models\Banner_event_periode;

class Beranda_controller extends Controller
{
    public function index(){
        // $data = \App\Models\Marquee::whereHas('clients',function($e){
        //     $e->where('nama','PT. ICS');
        //   })->with('clients')->first();
        // dd($data);

    	$banner = M_banner::whereHas('periods',function($e){
            $e->where('tanggal','=',date('Y-m-d'));
        })->orderBy('urutan','asc')->get();
        // dd($banner);
    	$cek_event = Banner_event_periode::where('tanggal',date('Y-m-d'))->count();
    	if($cek_event > 0){
    		$event = Banner_event_periode::with('banner_events')->where('tanggal',date('Y-m-d'))->first();
    	}else{
    		$event = null;
    	}

        

        try {
            $ig = $this->get_ig();
            // dd($ig);
            $data_ig = $ig->graphql->user->edge_owner_to_timeline_media->edges;
            // dd($data_ig);
            $feed_ig = [];
            foreach ($data_ig as $ig) {
                // dd($ig);
                $a = [];
                $a['photo'] = $ig->node->thumbnail_src;
                $a['is_video'] = $ig->node->is_video;
                $a['total_komen'] = $ig->node->edge_media_to_comment->count;
                $a['total_like'] = $ig->node->edge_media_preview_like->count;

                foreach ($ig->node->edge_media_to_caption->edges as $cp) {
                    $a['caption'] = $cp->node->text;
                }
                array_push($feed_ig, $a);
            }
        } catch (\Exception $e) {
            $feed_ig=null;
        }
        // dd($feed_ig);
        $title = 'PT. Reasuransi Nasional Indonesia';

    	return view('nebros.beranda.index',compact('banner','event','feed_ig','title'));
    }

    public function get_ig(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.instagram.com/nasionalre/?__a=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Content-Type:application/json',
                // 'Authorization: Basic '. 'YWRtaW4tZmFkbHk6YXNhc2Fz',
                ),
            ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        return json_decode($response);
        // curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     $produk = json_decode($response);
        //             // dd($kota);
        // }
        
    }
}
