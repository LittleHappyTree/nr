<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child_sub_menu extends Model
{
    protected $table = 'child_sub_menu';

    public function menus(){
    	return $this->belongsTo('App\Models\Menu','menu');
    }

    public function parent_sub_menus(){
    	return $this->belongsTo('App\Models\Parent_sub_menu','parent_sub_menu');
    }

    public function pagess(){
    	return $this->belongsTo('App\Page','pages')->withDefault(['name'=>null]);
    }
}
