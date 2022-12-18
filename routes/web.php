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

    $comics = config('comics.comics');
    $banner_icons = config('banner_icons.icons');
    $social_icons = config('social_icons.icons');
    //dd($comics);
    //dd($banner_icons);
    return view('home', compact('comics', 'banner_icons', 'social_icons'));
})->name('home');
