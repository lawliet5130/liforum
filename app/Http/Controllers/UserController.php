<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

use App\Mail\ScientistApplied;
use App\Branch;
use App\Country;
use App\ScientistAccount;
use App\Work;
use App\Video;

use TCG\Voyager\Http\Controllers\ContentTypes\Image as StoreImage;
use TCG\Voyager\Facades\Voyager;

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

    public function genDataEdit(Request $request){
        $data=$request->all();
        $validator=Validator::make($data,[
            'name'=>'required',
            'surname'=>'required',
            'website'=>'nullable|url',
            'facebook'=>'nullable|url',
            'linkedin'=>'nullable|url',
            'about'=>'min:50',
            'image'=>'max:100'
        ]);

        if($validator->fails()){
            foreach ($validator->errors()->getMessages() as $key => $value) {
                unset($data[$key]);
            }
        }

        if($request->image && !$validator->errors()->get('image')){
            $imageRow=Voyager::model('DataType')->where('slug', '=', 'scientist-accounts')->first()->editRows->where('id',37)->first();
            $image=(new StoreImage($request,'scientist-accounts',$imageRow,null))->handle();
            $data['image']=$image;
        }else{
            unset($data['image']);
        }

        Auth::guard('profiles')->user()->update($data);

        return redirect()->back()->withErrors($validator);
    }

    public function addItem(Request $request){
        foreach ($request->data as $key => $value) {
            $data[$value['name']]=$value['value'];
        }

        $validator=Validator::make($data,[
            'title'=>'required',
            'text'=>'min:150',
            'link'=>'url',
        ]);

        $blade='prof-add-'.str_singular($data['item']);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->getMessages()]);
        }

        switch ($data['item']) {
            case 'works':
                $item=new Work;
                break;
            
            case 'videos':
                $item=new Video;
                break;
        }

        $itemType=$data['item'];
        unset($data['item']);

        $item->scientist_id=Auth::guard('profiles')->user()->id;
        $item->fill($data);
        $item->save();

        return response()->view('partials.'.$blade,compact('item'))->withHeaders(['iid'=>$item->id,'item'=>$itemType]);
    }

    public function editItem(Request $request){
        foreach ($request->data as $key => $value) {
            $data[$value['name']]=$value['value'];
        }

        $blade='prof-add-'.str_singular($data['item']);

        $validator=Validator::make($data,[
            'title'=>'required',
            'text'=>'min:150',
            'link'=>'url',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()->getMessages()]);
        }
        $item=Auth::guard('profiles')->user()->{$data['item']}->find($data['id']);
        $itemType=$data['item'];
        unset($data['id'],$data['item']);
        $item->update($data);

        return response()->view('partials.'.$blade,compact('item'))->withHeaders(['iid'=>$item->id,'item'=>$itemType]);
    }

    public function deleteItem(Request $request){
        $item=Auth::guard('profiles')->user()->{$request->item}->find($request->id)->delete();
        
        return response()->json(['iid'=>$request->id,'item'=>$request->item]);
    }

    public function getScItems(Request $request){
        $user=ScientistAccount::find($request->scientist);
		$items=$user->{$request->item}->sortByDesc('created_at')->slice($request->number)->take($request->quantity)->transform(function ($item, $key) {
	    	$item->branch_id=$item->branch->name;
	    	return $item;
		})->values();
		($request->number+$request->quantity >= $user->{$request->item}->count())? $isLast=1 : $isLast=0;
		return response()->view('partials.add-'.str_singular($request->item),compact('items'))->header('isLast',$isLast);
	}

    public function voteStartup(Request $request){
        Auth::guard('profiles')->user()->startups()->attach($request->startup);
        return response()->json(1);
    }
}
