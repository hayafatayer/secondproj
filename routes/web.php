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
Route::get('about', function () {
   $name = 'mohammed';
return view('about',[
    'name' => $name
]);


});

Route::get('about', function () {
    $name = 'ahmad';
return view('about') -> with('name',$name);

});
Route::get('about', function () {
   $name = 'ali';
return view('about' ,compact('name'));

});
Route::get('about', function () {
  $name = request('name');
return view('about' ,compact('name'));

});
Route::post('store', function () {
    $name = request('name');
return view('about' ,compact('name'));

});
