<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
	use Searchable;

    public function getTags(){
    	$tags=array_filter(explode(',',$this->tags));

    	return $tags;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['text']=strip_tags($array['text']);
        $array=array_only($array,['title','tags','text']);

        return $array;
    }
}
