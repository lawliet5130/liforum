<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\FraudAttempt;
use App\FBUser;

use Socialite;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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
    
    public function myProfile(){
    	$user=Auth::guard('fb')->user();

    	return view('pages.user-profile',compact('user'));
    }

    public function userProfile($user){
    	if(Auth::guard('fb')->check() && Auth::guard('fb')->user()->id==$user->id){
    		return redirect()->route('myProfile');
    	}

    	return view('pages.user-profile',compact('user'));
    }

    public function voteScientist(Request $request){
    	if(Auth::guard('fb')->user()->scientists()->get()->contains('id',$request->scientist)){
    		$myLog=fopen(public_path().'/vendor/application/fraud.txt','a');
            fwrite($myLog, "\nDate=".\Carbon\Carbon::now().";\nUser=".Auth::guard('fb')->user()->id.";\nScientist=".$request->scientist.";\n");
            fclose($myLog);

            Mail::to('lawliet5130@gmail.com')->send(new FraudAttempt());

            return response()->json(['fraud',route('getFraud')]);
        }else{
    		Auth::guard('fb')->user()->scientists()->attach($request->scientist);        
        }
    	return response()->json('success');
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