<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addr extends Model
{
    protected $table = 'addr';

    public function alamats(){
    	return $this->hasOne('App\Models\Addr_alamat','addr');
    }

    public function emails(){
    	return $this->hasOne('App\Models\Addr_email','addr');
    }

    public function faxs(){
    	return $this->hasMany('App\Models\Addr_fax','addr');
    }

    public function no_telps(){
    	return $this->hasMany('App\Models\Addr_no_telp','addr');
    }
}
