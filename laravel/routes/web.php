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

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/portfolio','portfolio')->name('portfolio');



/*
Route::get('/', function () {
    $nombre = 'Jorge';
    return view('home')->with('nombre',$nombre);
})->name('home');
*/
/*
Forma de React 
Route::get('/', function () {
    $nombre = 'Jorge';
    return view('home')->with(['nombre' => $nombre]);
})->name('home');
*/

/*
Forma de Vue
Route::get('/', function () {
    $nombre = 'Jorge';
    return view('home', ['nombre' => $nombre]);
})->name('home');
*/

/*
con compact
Route::get('/', function () {
    $nombre = 'Jorge';
    return view('home', compact('nombre'));
})->name('home');
*/

