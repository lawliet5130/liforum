<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public function branch(){
    	return $this->belongsTo('App\Branch');
    }
}
