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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    Route::resource('categories', 'CategoryController');
});

Route::domain('{tenant}.ben.laravel')
->group(function(){
    Route::get('/test', function($tenant) {
        return "teste $tenant";
    });

    Route::prefix('/admin')->group(function() {
        Route::get('/', function() {
            return "Admin";
        });
    });

    Route::prefix('/app')->group(function() {
        Route::get('/', function() {
            return "Multi tenancy";
        });
    });
});