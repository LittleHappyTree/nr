<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent_sub_menu extends Model
{
    protected $table = 'parent_sub_menu';

    public function menus(){
    	return $this->belongsTo('App\Models\Menu','menu');
    }

    public function childs(){
    	return $this->hasMany('App\Models\Child_sub_menu','parent_sub_menu');
    }
}
