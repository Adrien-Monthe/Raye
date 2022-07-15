<?php

//use Illuminate\Support\Facades\Auth;
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
    //App::setLocale('en');
     return view('website.pages.home');
 });




Route::group(['prefix'=>'{language}'], function ()
{
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact_page'])->name('contact');

    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about_page'])->name('about');

    Route::get('/community', [App\Http\Controllers\HomeController::class, 'community_page'])->name('community');

    Route::get('/newsfeed', [App\Http\Controllers\SocialMediaController::class, 'index'])->name('newsfeed');
});



//Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
