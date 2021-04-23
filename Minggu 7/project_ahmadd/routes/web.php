<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/hello', function() {
	return 'Hello World';
});
Route::get('/belajar', function() {
	echo '<h1>Hello World</h1>';
	echo '<p>Sedang Belajar Laravel</p>';
});
Route::get('page/{nomor}', function($nomor){
	return 'Ini Halaman ke-'.$nomor;
});
Route::get('/gambar', function(){
	return view('gambar');
});*/
/*Route::get("/home", function(){
	return view("homepage");
});*/

Route::resource('user', 'DetailProfileController');

Route::group(['namespace'=> 'Frontend'], function(){
	Route::resource('home', 'HomeController');
});
Route::group(['namespace'=> 'Backend'], function() {
	Route::resource('dashboard', 'DashboardController');
});
//Route::resource('user','ManagementUserController');
Auth::routes();

Route::group(['namespace'=> 'Frontend'], function()
{
	Route::get('/', 'HomeController@index');
	Route::resource('home', 'HomeController');
});

Route::group(['middleware'=> ['web', 'auth']], function(){
	Route::group(['namespace'=> 'Backend'], function(){
		Route::resource('dashboard', 'DashboardController');
	});
});
/*Route::group(['namespace'=> 'Backend'], function() {
	Route::resource('dashboard', 'DashboardController');
});*/
//Route::get('/home', 'HomeController@index')->name('home');