<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marquee_periode extends Model
{
    protected $table = 'marquee_periode';

    public function marquees(){
    	return $this->belongsTo('App\Models\Marquee','marquee');
    }
}
