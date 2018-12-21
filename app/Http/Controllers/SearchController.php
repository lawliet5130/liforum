<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ScientistAccount;
use App\Work;
use App\Startup;
use App\Video;
use App\Branch;

class SearchController extends Controller
{
	public function getKnowledge(Request $request){
		if($request->search || $request->branch){
			$scientists=ScientistAccount::search($request->search)->get()->when($request->branch,function($query) use ($request){
				return $query->where('branch_id',$request->branch);
			});
			$scCount=$scientists->count();
			$scientists=$scientists->take(5);

			$works=Work::search($request->search)->get()->when($request->branch,function($query) use ($request){
				return $query->where('branch_id',$request->branch);
			});
			$wrkCount=$works->count();
			$works=$works->take(5);

			$startups=Startup::search($request->search)->get()->when($request->branch,function($query) use ($request){
				return $query->where('branch_id',$request->branch);
			});
			$supCount=$startups->count();
			$startups=$startups->take(5);

			$videos=Video::search($request->search)->get()->when($request->branch,function($query) use ($request){
				return $query->where('branch_id',$request->branch);
			});
			$viCount=$videos->count();
			$videos=$videos->take(4);

			$searched=true;
		}else{
			$scientists=ScientistAccount::select(['name','surname','id','image','branch_id','country_code'])->withCount('startups','works','users')->orderBy('users_count','desc')->take(5)->get();
			$scCount=ScientistAccount::count();
	
			$works=Work::orderBy('created_at','desc')->take(5)->get();
			$wrkCount=Work::count();
	
			$startups=Startup::withCount('scientists')->orderBy('scientists_count','desc')->take(5)->get();
			$supCount=Startup::count();
	
			$videos=Video::orderBy('created_at','desc')->take(4)->get();
			$viCount=Video::count();

			$searched=false;
		}
		
		$branches=Branch::all();

		return view('pages.knowledge',compact('scientists','scCount','works','wrkCount','startups','supCount','videos','viCount','branches','searched'));
	}

	public function getPartKnowledge(Request $request,$type){
		switch ($type) {
			case 'scientists':
				$items=$scientists=ScientistAccount::search($request->search)->get()->when($request->branch,function($query) use ($request){
					return $query->where('branch_id',$request->branch);
				});
				break;

			case '':
				
				break;
		}

		return view('pages.partitioned-knowledge',compact('items','type'));
	}
}
