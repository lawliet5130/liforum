<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScientistAccount;
use App\Startup;
use App\Article;

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

	public function getNews(){
		$articles=Article::orderBy('promoted','desc')->orderBy('created_at','desc')->paginate(6);

		return view('pages.news',compact('articles'));
	}

	public function getArticle($article){
		return view('pages.article',compact('article'));
	}

	public function getKnowledge(){
		return view('pages.knowledge');
	}
}
