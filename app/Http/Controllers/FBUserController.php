<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class FBUserController extends Controller
{
    public function redirectToProvider(){
    	return Socialite::driver('facebook')->redirect();
    }
}
