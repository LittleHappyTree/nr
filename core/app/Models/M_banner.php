<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_banner extends Model
{
    protected $table = 'm_banner';

    public function periods(){
    	return $this->hasMany('App\Models\M_banner_period','m_banner');
    }
}
