<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{
    public function branch(){
    	return $this->belongsTo('App\Branch');
    }

    public function scientist(){
    	return $this->belongsTo('App\ScientistAccount','scientist_id')->withTrashed();
    }

    protected $guarded=['scientist_id'];


}
