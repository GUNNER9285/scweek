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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/student', 'PeopleController@student');
Route::post('/teacher', 'PeopleController@teacher');
Route::post('/people', 'PeopleController@people');

Route::get('/show/{id}','PeopleController@showqr');

Route::get('/showmember', 'PeopleController@showmember');
Route::get('/showroom/{id}', 'PeopleController@showroom');

Route::get('/checkin/{id}', 'PeopleController@checkin');
Route::get('/submit/{id}/{idr}', 'PeopleController@addroom');

Route::get('/api/total/{day}', 'PeopleController@total');
Route::post('/api/scanqr', 'PeopleController@scanqr');

Route::get('/edit/{id}', 'PeopleController@edit');
Route::patch('/edit/{id}/success', 'PeopleController@update');
Route::delete('/destroyR/{id}', 'PeopleController@destroyinroom');
Route::delete('/destroy/{id}', 'PeopleController@destroy');

Route::get('/test', 'PeopleControllerph@test');