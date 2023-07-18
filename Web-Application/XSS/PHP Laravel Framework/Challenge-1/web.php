<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//                #source_code_challenges 
//                   By: **ZIX**
Route::get('/language/{lang}', function ($lang, Request $request) {

    $setCookie = Cookie::make('language', $lang, 60);
    return redirect('/')->withCookie($setCookie);
})->where('lang', '.*');


Route::get('/', function (Request $request) {

    $language = $request->cookie('language');
    return view("Cookie", [

        'lang' => $language
    ]);
});
