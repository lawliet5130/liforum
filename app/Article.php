<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    public function getTags(){
    	$tags=array_filter(explode(',',$this->tags));

    	return $tags;
    }
}
