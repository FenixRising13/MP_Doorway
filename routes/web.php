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
    return view('auth/login');
});

Route::get('/index', function(){
    return view('index');
});

Route::resource('/users',"UsersController");

Route::resource('/properties',"PropertiesController");

Route::resource('/repairs',"RepairsController");

Route::resource('/histories',"HistoriesController");

Auth::routes();

Route::get('/home', 'HomeController@index');


// Form Routes // Added middleware auth 9/25
Route::get('/forms', function () {
  return view('forms');
})->middleware('auth');

Route::get('/laterent', function () {
  return view('laterent');
})->middleware('auth');

Route::get('/leaserenewal', function () {
  return view('leaserenewal');
})->middleware('auth');

Route::get('/changeaddress', function () {
  return view('changeaddress');
})->middleware('auth');

Route::get('/threedaynotice', function () {
  return view('threedaynotice');
})->middleware('auth');
