<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\FraudAttempt;
use App\FBUser;
use App\Branch;
use App\Work;

use Socialite;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Validator;

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
    	Auth::guard('fb')->login($currentUser,true);

    	return redirect('/profile#');
    }

    public function logout(Request $request)
    {
        \Auth::guard('fb')->logout();
        return redirect()->route('getHome');
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

    public function userWorks(){
        $user=Auth::guard('fb')->user();
        $branches=Branch::all();

        return view('pages.user-works',compact('user','branches'));
    }

    public function userAddWork(Request $request){
        foreach ($request->data as $key => $value) {
            $data[$value['name']]=$value['value'];
        }

        $validator=Validator::make($data,[
            'title'=>'required',
            'text'=>'min:150',
            'link'=>'url',
        ]);

        $blade='prof-add-work';

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->getMessages()]);
        }
        
        $item=new Work;

        $item->workable_id=Auth::guard('fb')->user()->id;
        $item->workable_type="App\FBUser";
        $item->fill($data);
        $item->save();

        return response()->view('partials.'.$blade,compact('item'))->withHeaders(['iid'=>$item->id,'item'=>'work']);
    }

    public function userEditWork(Request $request){
        foreach ($request->data as $key => $value) {
            $data[$value['name']]=$value['value'];
        }
        
        $textRule='min:150';

        $blade='prof-add-work';

        $validator=Validator::make($data,[
            'title'=>'required',
            'text'=>$textRule,
            'link'=>'url',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->getMessages()]);
        }
        $item=Auth::guard('fb')->user()->works->find($data['id']);
        unset($data['id']);
        $item->update($data);

        return response()->view('partials.'.$blade,compact('item'))->withHeaders(['iid'=>$item->id]);
    }

    public function userDeleteWork(Request $request){
        $item=Auth::guard('fb')->user()->works->find($request->id)->delete();
        
        return response()->json(['iid'=>$request->id]);
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