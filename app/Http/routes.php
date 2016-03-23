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
use \Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
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
    Route::get('/', function(){
        return view('index');
    });

    Route::get('/thucpham', 'FoodsController@index');

    Route::get('/thucpham/{id}/show', 'FoodsController@show');

    Route::get('/thucpham/shownutrient/{id}', 'FoodsController@shownutrient');

    Route::get('/thucpham/create', 'FoodsController@create');

    Route::post('/thucpham/store', 'FoodsController@store');

    Route::get('/thucpham/edit/{id}', 'FoodsController@edit');

    Route::post('thucpham/update/{id}', 'FoodsController@update');

    Route::get('thucpham/delete/{id}', 'FoodsController@destroy');

    Route::get('/thucpham/searchredirect', function(Request $request){

        $search =  urlencode($request->input('search'));
        return redirect('/thucpham/search/' . $search);
    });

    Route::get('/thucpham/search/{search}', 'FoodsController@search');


});
