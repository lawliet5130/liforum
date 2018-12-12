<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FBUser;

use Socialite;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class FBUserController extends Controller
{
    public function redirectToProvider(){
    	return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

		if(!FBUser::where('provider_id',$user->id)->exists()){
        	$imageLocation=$this->resizeAvatar($user->avatar_original);
		}else{
			$imageLocation=null;
		}
        $currentUser=FBUser::firstOrCreate(
        	[
        		'provider_id'=>$user->id
        	],
        	[
				'email'=>$user->email,
				'name'=>$user->name,
				'avatar'=>$imageLocation,
				'provider_id'=>$user->id
        	]
    	);
    	Auth::guard('fb')->login($currentUser);

    	return redirect('/profile#');
    }
    
    public function profile(){
    	$user=Auth::guard('fb')->user();
    	$user->stars=(int)str_after($user->stars,'s');

    	return view('pages.user-profile',compact('user'));
    }

    protected function resizeAvatar($imageLink){
    	$image=file_get_contents($imageLink);
        $fileName='temp'.str_random(3).'.jpg';
        $now=\Carbon\Carbon::now();
        $now=$now->englishMonth.$now->year;
        Storage::put('temp/'.$fileName, $image);
        $tempLocation='storage/temp/'.$fileName;
        Image::make($tempLocation)->resize(500,500)->save();
        $imageLocation=Storage::putFile('f-b-user/'.$now, new File($tempLocation));
        Storage::delete('temp/'.$fileName);

        return $imageLocation;
    }
}
