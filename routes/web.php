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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('not/authorized/{message}',function($message){
    $msg = $message;
    return view('auth.not_auth',compact('msg'));
})->name('not_authenticated');
Route::get('/test','HomeController@test');
Route::get('/form','HomeController@create');
Route::get('/post','HomeController@createpost');
Route::post('/store','HomeController@store');
Route::post('/storepost','HomeController@storepost');
Route::get('/return','HomeController@getHospitalDoctor');