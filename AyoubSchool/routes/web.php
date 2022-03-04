<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/about', function () {
    return view('components.pages.about');
})->middleware(['auth'])->name('about');
Route::get('/post', function () {
    return view('components.pages.post');
})->middleware(['auth'])->name('post');
Route::get('/servs', function () {
    return view('components.pages.servs');
})->middleware(['auth'])->name('servs');

Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
	Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::get('/about', function () {
        return view('components.pages.about');
    })->middleware(['auth'])->name('about');
    // Route::get('/post', function () {
    //     return view('components.pages.post');
    // })->middleware(['auth'])->name('post');
    Route::get('/servs', function () {
        return view('components.pages.servs');
    })->middleware(['auth'])->name('servs');
    Route::get('/create', function () {
        return view('components.pages.create');
    })->middleware(['auth'])->name('create');

    Route::get('/', function () {
        return view('index');
    })->middleware(['auth'])->name('home');


});


Route::resource('products','ProductController');
Route::get('product/soft/delete{id}','ProductController@softDelete')->name('softDelete');
 Route::get('/trashed','ProductController@trashedProcdut')->name('trashed');


 Route::resource('posts','ContactController');
