<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps = true;

    public function bcategory() {
      return $this->belongsTo('App\Bcategory');
    }

    public function blurs(){
    	return $this->hasOne('App\Models\Blogs_blur','blogs')->withDefault(['photo'=>'-']);
    }
}
