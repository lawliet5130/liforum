<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ScientistCreated;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ScientistAccount extends Authenticatable
{
	protected $guarded=['password','acc_status','login_link','login','deleted_at'];

	protected $events=[
		'created'=>ScientistCreated::class,
	];

	public function country()
    {
        return $this->belongsTo('App\Country','country_code');
    }

	public function branch(){
		return $this->belongsTo('App\Branch');
	}

	public function works(){
		return $this->hasMany('App\Work','scientist_id');
	}

	public function videos(){
		return $this->hasMany('App\Video','scientist_id');
	}

	public function startups(){
		return $this->belongsToMany('App\Startup','scientist_startup','scientist_id')->withTimestamps();
	}

	public function getGender(){
		switch ($this->gender) {
			case '0':
				$gender=['code'=>$this->gender,'name'=>'Not set'];
				break;
			
			case '1':
				$gender=['code'=>$this->gender,'name'=>"Male"];
				break;
			
			case '2':
				$gender=['code'=>$this->gender,'name'=>"Female"];
				break;
		}
		return $gender;
	}
}
