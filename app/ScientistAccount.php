<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use App\Events\ScientistCreated;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;

class ScientistAccount extends Authenticatable
{
	use Searchable;

	use Notifiable,Resizable,SoftDeletes;

	protected $guarded=['login','deleted_at'];

	protected $dates=['deleted_at'];

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
		return $this->morphMany('App\Work','workable');
	}
	
	public function videos(){
		return $this->hasMany('App\Video','scientist_id');
	}

	public function startups(){
		return $this->belongsToMany('App\Startup','scientist_startup','scientist_id')->withCount('scientists')->withTimestamps();
	}

	public function news(){
		return $this->hasMany('App\Article','scientist_id');
	}

	public function users(){
		return $this->belongsToMany('App\FBUser','user_scientist','scientist_id','user_id')->withTimestamps();
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

	public function getFullName(){
		return $this->name.' '.$this->surname;
	}

	public function routeNotificationForMail()
    {
        return $this->login;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array=array_only($array,['name','surname','about','knownas']);

        return $array;
    }
}
