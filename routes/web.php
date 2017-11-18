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
Route::get('/pricing',function(){
    return view('pricing');
});

//Battery repair services
Route::get('/services/car-battery-cable-replacement', function(){
    return view('services.car-battery-cable-replacement');
});

Route::get('/services/car-battery-replacement', function(){
    return view('services.car-battery-replacement');
});

//car purchase services
Route::get('/services/service-battery-cables', function(){
    return view('services.service-battery-cables');
});


//Brake repair services

Route::get('/services/abs-fluid-level-sensor-replacement', function(){
    return view('services.abs-fluid-level-sensor-replacement');
});
Route::get('/services/anti-lock-control-relay-replacement', function(){
    return view('services.anti-lock-control-relay-replacement');
});
Route::get('/services/anti-lock-fuses-relay-replacement', function(){
    return view('services.anti-lock-fuses-relay-replacement');
});
Route::get('/services/anti-lock-pressure-switch-replacement', function(){
    return view('services.anti-lock-pressure-switch-replacement');
});
Route::get('/services/brake-caliper-replacement', function(){
    return view('services.brake-caliper-replacement');
});
Route::get('/services/brake-drum-replacement', function(){
    return view('services.brake-drum-replacement');
});
Route::get('/services/brake-hose-replacement', function(){
    return view('services.brake-hose-replacement');
});
Route::get('/services/brake-master-cylinder-replacement', function(){
    return view('services.brake-master-cylinder-replacement');
});
Route::get('/services/brake-pad-replacement', function(){
    return view('services.brake-pad-replacement');
});
Route::get('/services/brake-discs-replacement', function(){
    return view('services.brake-discs-replacement');
});
Route::get('/services/brake-shoe-replacement', function(){
    return view('services.brake-shoe-replacement');
});
Route::get('/services/brake-system-flush', function(){
    return view('services.brake-system-flush');
});
Route::get('/services/brake-vacuum-pump-replacement', function(){
    return view('services.brake-vacuum-pump-replacement');
});
Route::get('/services/brake-wheel-cylinder-replacement', function(){
    return view('services.brake-wheel-cylinder-replacement');
});
Route::get('/services/vacuum-pump-repair', function(){
    return view('services.vacuum-pump-repair');
});
Route::get('/services/wheel-hub-assembly-replacement', function(){
    return view('services.wheel-hub-assembly-replacement');
});

//
Route::get('/services/abs-fluid--level-sensor-replacement', function(){
    return view('services.engine-inspection');
});

//check vaccumm brake booster and check valve replacement 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

