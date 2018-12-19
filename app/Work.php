<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Work extends Model
{
	use Searchable;

    public function branch(){
    	return $this->belongsTo('App\Branch');
    }

    public function scientist(){
    	return $this->belongsTo('App\ScientistAccount','scientist_id')->withTrashed();
    }

    protected $guarded=['scientist_id'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array=array_only($array,['title','text']);

        return $array;
    }

}
