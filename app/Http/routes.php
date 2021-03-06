<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::any(
    'Member/baseInfo/{id?}',
    [
        'uses' => 'MemberController@baseInfo',
    ]
)->where('id', '[0-9]+');
Route::any('Student/InsertDb', ['uses' => 'StudentController@InsertDb']);
Route::any('Student/iterable', ['uses' => 'StudentController@iterable']);
Route::any('Student/iterUpdate', ['uses' => 'StudentController@iterUpdate']);
Route::any('Student/iterDel', ['uses' => 'StudentController@iterDel']);
Route::any('Student/iterInsert', ['uses' => 'StudentController@iterInsert']);
Route::any("Student/aggrgation", ['uses' => 'StudentController@aggrgation']);
Route::any("Student/orm", ['uses' => 'StudentController@orm']);
Route::any("Student/timeDate", ['uses' => 'StudentController@timeDate']);
Route::any("Student/request", ['uses' => 'StudentController@request']);
Route::any('Student/activity0', ['uses' => 'StudentController@activity0']);

// web 中间件
Route::group(['middleware' => ['web']], function () {
    Route::any('setSession', ['uses' => 'StudentController@setSession']);
    Route::any('getSession', ['uses' => 'StudentController@getSession']);
});

// activity 中间件
Route::group(['middleware' => ['activity']], function () {
    Route::any('activity1', ['uses' => 'StudentController@activity1']);
    Route::any('activity2', ['uses' => 'StudentController@activity2']);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

});
