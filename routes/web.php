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


// Form Routes
Route::get('/forms', function () {
  return view('forms');
});

Route::get('/laterent', function () {
  return view('laterent');
});

Route::get('/leaserenewal', function () {
  return view('leaserenewal');
});

Route::get('/changeaddress', function () {
  return view('changeaddress');
});

Route::get('/threedaynotice', function () {
  return view('threedaynotice');
});
