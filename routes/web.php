<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// --------------Main routes--------------
Route::get('/','MainController@getHome')->name('getHome');
Route::get('/about','MainController@getAbout')->name('getAbout');

// --------------Startups routes--------------
Route::bind('stup',function($value){
	return App\Startup::find($value);
});

Route::get('/startups','MainController@getStartups')->name('getStartups');
Route::get('/startups/startup{stup}','MainController@getStartup')->name('getStartup');

// --------------News routes--------------
Route::bind('post',function($value){
	return App\Article::find($value);
});

Route::get('/news','MainController@getNews')->name('getNews');
Route::get('/news/article{post}','MainController@getArticle')->name('getArticle');
Route::post('/news-search','MainController@newsSearch')->name('newsSearch');
Route::get('/videos','MainController@getVideos')->name('getVideos');


// --------------Knowledge routes--------------
Route::get('/knowledge','MainController@getKnowledge')->name('getKnowledge');


// --------------Get items routes--------------
Route::get('/getscitem','ScientistController@getScItems')->name('getScItems');



// --------------Scientists routes--------------
Route::bind('scientist', function ($value) {
    return App\ScientistAccount::find($value);
});

Route::get('/scientists','MainController@getScList')->name('getScList');
Route::post('/scientist-apply','ScientistController@scientistApply')->name('scientistApply');
Route::get('/scientists/{scientist}','ScientistController@scientistProfile')->name('scientistProfile');



// --------------Scientist profile routes--------------
Route::prefix('my-profile')->middleware(['scLoged'])->group(function(){



	// --------------Basic profile routes--------------
	Route::get('/','ScientistController@logedProfile')->name('logedProfile');
	Route::get('/edit','ScientistController@editProfile')->name('editProfile');
	Route::post('/vote-startup','ScientistController@voteStartup')->name('voteStartup');



	// --------------Scientist edit routes--------------
	Route::post('/gendata-edit','ScientistController@genDataEdit')->name('genDataEdit');
	Route::post('/add-item','ScientistController@addItem')->name('addItem');
	Route::post('/edit-item','ScientistController@editItem')->name('editItem');
	Route::post('/delete-item','ScientistController@deleteItem')->name('deleteItem');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/fraud',function(){
	return view('pages.fraud');
})->name('getFraud');