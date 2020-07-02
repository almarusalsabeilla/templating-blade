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


//Route::get('/', 'HomeController@form');
Route::get('/register', 'AuthController@form');
Route::post('/register', 'AuthController@welcome_pos');

Route::get('/master', function() {
    return view ('adminlte.master');
});

Route::get('/items', function() {
    return view ('items.index');
});

Route::get('/items/create', function(){
    return view('items.create');
});

Route::get('/', function(){
    return view('items.home');
});

Route::get('/data-tables', function(){
    return view('items.data-tables');
});
