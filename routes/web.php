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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function() {
    return view('index');
});


Route::get('/book', function() {
    return File::get( public_path().'/book.html' );
});
Route::get('/services/brake-repair', function(){
    return view('services.brake-repair');
});

Route::get('/services/brake-pad-replacement', function(){
    return "brake pad replacement page";
});

Route::get('/services/battery-is-dead-inspection', function(){
    return "battery is dead replacement page";
});


Route::get('/test', function(){
    return "testing route page";
});

Route::get('/make-appointment', function(){
    return view('make-appointment');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});


Route::get('/services/engine-inspection', function(){
    return view('services.engine-inspection');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
