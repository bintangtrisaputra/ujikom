<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('front');
});

Auth::routes(['register' =>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/kategori', CategoriController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/film', FilmController::class);
Route::resource('/review', ReviewController::class);

Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function(){
    Route::get('/',function() {
        return view('admin.index');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
