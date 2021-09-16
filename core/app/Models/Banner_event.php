<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner_event extends Model
{
    protected $table = 'banner_event';
    // public $incrementing = false;

    public function periodes(){
    	return $this->hasMany('App\Models\Banner_event_periode','banner_event');
    }
}
