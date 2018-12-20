<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Video extends Model
{
	use Searchable;
	
    public function branch(){
    	return $this->belongsTo('App\Branch');
    }

    protected $guarded=['scientist_id'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array=array_only($array,['title','text']);

        return $array;
    }
}
