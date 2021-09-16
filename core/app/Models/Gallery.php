<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public function photos_one(){
    	return $this->hasOne('App\Models\Gallery_photo','gallery');
    }

    public function photos_many(){
    	return $this->hasMany('App\Models\Gallery_photo','gallery');
    }
}
