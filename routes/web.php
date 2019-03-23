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
    App\Jobs\SendMassage::withChain([
        new App\Jobs\PrepareJob('Prepare...'),
        new App\Jobs\PubblishJob('Pubblish!')
    ])->dispatch("TEST2 MESSAGE")->delay(now()->addMinutes(10));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

