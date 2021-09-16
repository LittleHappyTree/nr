<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs_blur extends Model
{
    protected $table = 'blogs_blur';

    public function blogss(){
    	return $this->belongsTo('App\Blog','blogs');
    }
}
