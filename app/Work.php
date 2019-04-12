<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Voyager;

class Work extends Model
{
	use Searchable;

    public function branch(){
    	return $this->belongsTo('App\Branch');
    }

    public function workable(){
    	return $this->morphTo();
        // ->withTrashed()
    }

    public function getWorkableImage(){
        $item=$this->workable;
        if(get_class($item)=="App\FBUser"){
            $image=$item->avatar;
        }else{
            $voyager=new Voyager;
            $image=$voyager->image($item->thumbnail('square', 'image'));
        }

        return $image;
    }

    public function getWorkableLink(){
        $item=$this->workable;
        if(get_class($item)=="App\FBUser"){
            $link=route('userProfile',['user'=>$item->id]);
        }else{
            $link=route('scientistProfile',['scientist'=>$item->id]);
        }

        return $link;
    }

    public function getWorkableName(){
        $item=$this->workable;
        if(get_class($item)=="App\FBUser"){
            $name=$item->name;
        }else{
            $name=$item->getFullName();
        }

        return $name;
    }

    protected $guarded=['workable_id','workable_type'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array=array_only($array,['title','text']);

        return $array;
    }

}
