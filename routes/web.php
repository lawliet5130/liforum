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
Route::get('/scientists','MainController@getScList')->name('getScList');
Route::get('/about','MainController@getAbout')->name('getAbout');

// --------------Startups routes--------------
Route::bind('stup',function($value){
	return App\Startup::find($value);
});

Route::get('/startups','MainController@getStartups')->name('getStartups');
Route::get('/startup/{stup}','MainController@getStartup')->name('getStartup');

// --------------News routes--------------
Route::bind('post',function($value){
	return App\Article::find($value);
});

Route::get('/news','MainController@getNews')->name('getNews');
Route::get('/news/{post}','MainController@getArticle')->name('getArticle');


// --------------Knowledge routes--------------
Route::get('/knowledge','MainController@getKnowledge')->name('getKnowledge');


// --------------Get items routes--------------
Route::get('/getscitem','UserController@getScItems')->name('getScItems');



// --------------Scientist routes--------------
Route::bind('scientist', function ($value) {
    return App\ScientistAccount::find($value);
});

Route::post('/scientist-apply','UserController@scientistApply')->name('scientistApply');
Route::get('/scientist/{scientist}','UserController@scientistProfile')->name('scientistProfile');



// --------------Scientist profile routes--------------
Route::prefix('sc-profile')->middleware(['scLoged'])->group(function(){



	// --------------Basic profile routes--------------
	Route::get('/','UserController@logedProfile')->name('logedProfile');
	Route::get('/edit','UserController@editProfile')->name('editProfile');
	Route::post('/vote-startup','UserController@voteStartup')->name('voteStartup');



	// --------------Scientist edit routes--------------
	Route::post('/gendata-edit','UserController@genDataEdit')->name('genDataEdit');
	Route::post('/add-item','UserController@addItem')->name('addItem');
	Route::post('/edit-item','UserController@editItem')->name('editItem');
	Route::post('/delete-item','UserController@deleteItem')->name('deleteItem');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();