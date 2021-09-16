<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marquee_client extends Model
{
    protected $table = 'marquee_client';

    public function clients(){
    	return $this->belongsTo('App\Models\M_client','m_client');
    }

    public function marquees(){
    	return $this->belongsTo('App\Models\Marquee','marquee');
    }
}
