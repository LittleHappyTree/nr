<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    public function parents(){
    	return $this->hasMany('App\Models\Parent_sub_menu','menu');
    }
}
