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


// --------------Get items routes--------------
Route::get('/getscitem','UserController@getScItems')->name('getScItems');


// --------------Scientist routes--------------
Route::post('/scientist-apply','UserController@scientistApply')->name('scientistApply');
Route::get('/scientist/{scientist}','UserController@scientistProfile')->name('scientistProfile');
Route::get('/sc-profile','UserController@logedProfile')->middleware('scLoged')->name('logedProfile');
Route::get('/sc-profile/edit','UserController@editProfile')->name('editProfile');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();