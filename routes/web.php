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


Route::resource('comics', ComicController::class)->only([
    'index', 'show'
]);

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::resource('comics', ComicController::class)->except([
            'index', 'show'
        ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('{any?}', function(){
//     return view('guests.home');
// })->where('any', '.*'); 
