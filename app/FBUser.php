<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class FBUser extends Authenticatable
{
    protected $table="f_b_user";

    protected $fillable=['email','name','avatar','provider_id'];
}
