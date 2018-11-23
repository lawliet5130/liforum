<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScientistAccount;
use App\Startup;
use App\Article;
use App\Work;
use App\Video;

class MainController extends Controller
{
	public function getHome(){
		$articles=Article::where('onhome','1')->take(3)->get();
		$scientists=ScientistAccount::take(5)->select(['name','surname','id','image','branch_id','country_code'])->withCount('startups')->get();
		$startups=Startup::withCount('scientists')->orderBy('scientists_count','desc')->take(10)->get();

		return view('pages.index',compact('articles','scientists','startups'));
	}

	public function getScList(){
		$scs=ScientistAccount::select(['name','surname','id','image','branch_id','country_code'])->withCount('startups')->get();

		return view('pages.scientists',compact('scs'));
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getStartups(){
		$startups=Startup::withCount('scientists')->orderBy('scientists_count','desc')->get();

		return view('pages.startups',compact('startups'));
	}

	public function getStartup($startup){
		return view('pages.startup',compact('startup'));
	}

	public function getNews(Request $request){
		if($request->tag){
			$articles=Article::all()->filter(function($val,$key) use ($request){
				return in_array($request->tag, explode(',',$val->tags));
			});
		}else{
			$articles=Article::orderBy('promoted','desc')->orderBy('created_at','desc')->paginate(6);				
		}

		$tags=[];
		foreach (Article::all() as $art) {
			foreach(explode(',',$art->tags) as $tag){
				if($tag){
					if(array_key_exists($tag,$tags)){
						$tags[$tag]=$tags[$tag]+1;	
					}else{
						$tags[$tag]=1;
					}
				}
			}
		}
		arsort($tags);
		$tags=array_slice($tags, -20);

		return view('pages.news',compact('articles','tags'));
	}

	public function getArticle($article){
		return view('pages.article',compact('article'));
	}

	public function getKnowledge(){
		$scientists=ScientistAccount::take(5)->select(['name','surname','id','image','branch_id','country_code'])->withCount('startups','works')->get();
		$scCount=ScientistAccount::count();

		$works=Work::take(4)->orderBy('created_at','desc')->get();
		$wrkCount=Work::count();

		$startups=Startup::withCount('scientists')->orderBy('scientists_count','desc')->take(5)->get();
		$supCount=Startup::count();

		$videos=Video::take(4)->orderBy('created_at','desc')->get();
		$viCount=Video::count();

		return view('pages.knowledge',compact('scientists','scCount','works','wrkCount','startups','supCount','videos','viCount'));
	}
}
