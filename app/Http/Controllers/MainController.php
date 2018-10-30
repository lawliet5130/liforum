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

		return view('pages.index',compact('articles'));
	}

	public function getScList(){
		$scs=ScientistAccount::get(['name','surname','id','image','branch_id','country_code']);

		return view('pages.scientists',compact('scs'));
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getStartups(){
		$startups=Startup::withCount('scientists')->orderBy('scientists_count','desc')->get();
		// dd($startups->first()->scientists->find(\Auth::guard('profiles')));
		// dd(\Auth::guard('profiles')->user()->startups->find(1));

		return view('pages.startups',compact('startups'));
	}

	public function startup(){
		return view('pages.startup');
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
