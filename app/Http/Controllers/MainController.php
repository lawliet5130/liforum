<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScientistAccount;
use App\Startup;

class MainController extends Controller
{
	public function getHome(){
		return view('pages.index');
	}

	public function getScList(){
		$scs=ScientistAccount::get(['name','surname','id','image','branch_id','country_code']);

		return view('pages.scientists',compact('scs'));
	}

	public function getStartups(){
		$startups=Startup::withCount('scientists')->get();

		return view('pages.startups',compact('startups'));
	}
}
