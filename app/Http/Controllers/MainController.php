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
			$articles=Article::orderBy('created_at','desc')->get()->filter(function($val,$key) use ($request){
				return in_array($request->tag, explode(',',$val->tags));
			});

			$lastPage=floor($articles->count()/6)+1;
			$currentPage=($request->page)?$request->page:1;

			if($articles->count()>6){
				$elements=$this->getElements($articles,$lastPage,$currentPage);
			}else{
				$elements=null;
			}

			$articles=$articles->forPage($currentPage,6);

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

		return view('pages.news',compact('articles','tags','elements','lastPage'));
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

	protected function getElements($articles,$lastPage,$currentPage){
		if(floor($lastPage < 12)){
			$pages=[
				'first'=>range(1,$lastPage),
				'slider'=>null,
				'last'=>null
			];
		}else{
			switch ($currentPage) {
				case $currentPage<=6:
					$pages=[
						'first'=>range(1,8),
						'slider'=>null,
						'last'=>range($lastPage-1,$lastPage)
					];
					break;
				
				case $currentPage > $lastPage-6:
					$pages=[
						'first'=>range(1,2),
						'slider'=>null,
						'last'=>range($lastPage-8,$lastPage)
					];
					break;

				default:
					$pages=[
						'first'=>range(1,2),
						'slider'=>range($currentPage-3,$currentPage+3),
						'last'=>range($lastPage-1,$lastPage)
					];
					break;
			}
		}

		return array_filter([
            $pages['first'],
            is_array($pages['slider']) ? '...' : null,
            $pages['slider'],
            is_array($pages['last']) ? '...' : null,
            $pages['last'],
        ]);
	}
}
