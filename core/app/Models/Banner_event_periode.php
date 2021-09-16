<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner_event_periode extends Model
{
    protected $table = 'banner_event_periode';

    public function banner_events(){
    	return $this->belongsTo('App\Models\Banner_event','banner_event');
    }
}
