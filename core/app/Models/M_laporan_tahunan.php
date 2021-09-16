<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_laporan_tahunan extends Model
{
    protected $table = 'm_laporan_tahunan';

    public function tahuns($tahun){
    	return $this->whereYear('tahun',$tahun)->where('kategori',1)->orderBy('created_at','desc')->get();
    }

    public function triwulans($tahun){
    	return $this->whereYear('tahun',$tahun)->where('kategori',2)->orderBy('created_at','desc')->get();
    }
}
