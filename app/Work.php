<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
    public function branch(){
    	return $this->belongsTo('App\Branch');
    }

    protected $guarded=['scientist_id'];
}
