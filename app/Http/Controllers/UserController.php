<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScientistApplied;
use App\Branch;
use App\Country;
use App\ScientistAccount;

class UserController extends Controller
{
    public function scientistApply(Request $request){
    	$data=$request->except('_token');
    	Mail::to('lawliet5130@gmail.com')->send(new ScientistApplied($data));
    	return redirect()->back()->with(['status'=>'1','statusText'=>'Application succesfully sent!']);
    }

    public function scientistProfile($scientist,Request $request){
    	if(Auth::guard('profiles')->check() && Auth::guard('profiles')->user()->id==$scientist->id){
    		return redirect()->route('logedProfile');
    	}

    	$user=$scientist;
    	$code=$request->code;
    	if(!$user->acc_status && $code==$user->login_link){
    		$regCheck=1;
    	}

    	$user->gender=$user->getGender();
        dd($user->startups);

    	return view('pages.scientist-profile',compact('user','regCheck','code'));
    }

    public function logedProfile(Request $request){
    	$user=Auth::guard('profiles')->user();

    	$user->gender=$user->getGender();

    	return view('pages.scientist-profile',compact('user'));
    }

    public function editProfile(){
    	$user=Auth::guard('profiles')->user();
    	$user->gender=$user->getGender();
    	// dd($user);
    	$branches=Branch::all();
    	$countries=Country::all();

    	return view('pages.edit-profile',compact('user','branches','countries'));
    }

    public function getScItems(Request $request){
		(Auth::guard('profiles')->check())? $user=Auth::guard('profiles')->user() : $user=ScientistAccount::find($request->scientist);
		$items=$user->{$request->item}->sortByDesc('created_at')->slice($request->number)->take($request->quantity)->transform(function ($item, $key) {
	    	$item->branch_id=$item->branch->name;
	    	return $item;
		})->values();
		($request->number+$request->quantity >= $user->{$request->item}->count())? $isLast=1 : $isLast=0;
		return response()->view('partials.add-'.str_singular($request->item),compact('items'))->header('isLast',$isLast);
	}
}
