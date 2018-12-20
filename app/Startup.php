<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Startup extends Model
{
	use Searchable;

	public function branch(){
		return $this->belongsTo('App\Branch');
	}

	public function scientists(){
		return $this->belongsToMany('App\ScientistAccount','scientist_startup','startup_id','scientist_id')->withTrashed()->withTimestamps();
	}

	public function toSearchableArray()
    {
        $array = $this->toArray();

        $array=array_only($array,['title','description']);

        return $array;
    }
}
