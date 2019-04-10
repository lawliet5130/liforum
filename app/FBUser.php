<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class FBUser extends Authenticatable
{
    protected $table="f_b_user";

    protected $fillable=['email','name','avatar','provider_id'];

    public function getStars(){
    	return (int)str_after($this->stars,'s');
    }

    public function scientists(){
    	return $this->belongsToMany('App\ScientistAccount','user_scientist','user_id','scientist_id')->withCount('users')->withTimestamps();
    }

    public function works(){
    	return $this->morphMany('App\Work','workable');
    }
}