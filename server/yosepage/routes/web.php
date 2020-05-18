<?php


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('userpolicy', function () {
    return view('userpolicy');
});
Route::get('error/{code}', function ($code) {
    abort($code);
});

Route::group(['prefix' => 'host'], function () {

    Route::get('createpage', function () {
        return view('host/createpage');
    });

    Route::post('createpage', 'host\PagesController@createPage');
    Route::get('prevpage/{page_id}', 'host\PagesController@prevPage');
    Route::post('updatepage/{page_id}', 'host\PagesController@updatePage');
    Route::get('editpage/{page_id}', 'host\PagesController@editPage');
    Route::post('pageeditdone/{page_id}', 'host\PagesController@pageEditDone');
    Route::get('editpassword/{page_id}', 'host\PagesPasswordController@editPassword');
    Route::post('updatepassword/{page_id}', 'host\PagesPasswordController@updatePassword');
    Route::get('checkpassword/{page_id}', 'host\PagesPasswordController@enterPassword');
    Route::post('checkpassword/{page_id}', 'host\PagesPasswordController@checkPassword');

});

Route::group(['prefix' => 'page'], function() {

    Route::get('createmessage/{page_id}', 'page\PagesController@messageCardForm');
    Route::post('createmessage/{page_id}', 'page\PagesController@createMessageCard');
    Route::post('deletemessage/{page_id}', 'page\PagesController@deleteMessageCard');
    Route::get('prevpage/{page_id}', 'page\PagesController@prevPage');
    Route::get('thanksmessage', function () {
        return view('thanksmessage');
    });

});

Route::get('cheers/{page_id}', 'page\PagesController@showPage');
