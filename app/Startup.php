<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Startup extends Model
{
	public function branch(){
		return $this->belongsTo('App\Branch');
	}

	public function scientists(){
		return $this->belongsToMany('App\ScientistAccount','scientist_startup','startup_id','scientist_id')->withTimestamps();
	}
}
