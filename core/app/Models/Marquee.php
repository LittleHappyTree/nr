<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marquee extends Model
{
    protected $table = 'marquee';

    public function periodes(){
    	return $this->hasMany('App\Models\Marquee_periode','marquee');
    }

    public function clients(){
    	return $this->hasMany('App\Models\Marquee_client','marquee');
    }
}
