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
Route::bind('scientist', function ($value) {
    return App\ScientistAccount::where('id', $value)->first();
});


// --------------Main routes--------------
Route::get('/','MainController@getHome')->name('getHome');
Route::get('/scientists','MainController@getScList')->name('getScList');
Route::get('/startups','MainController@getStartups')->name('getStartups');



// --------------Get items routes--------------
Route::get('/getscitem','UserController@getScItems')->name('getScItems');



// --------------Scientist routes--------------
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
	Route::post('/add-work','UserController@addWork')->name('addWork');
	Route::post('/edit-item','UserController@editItem')->name('editItem');
	Route::post('/delete-item','UserController@deleteItem')->name('deleteItem');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();