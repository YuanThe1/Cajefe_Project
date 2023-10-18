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
Route::get('accounts', function () {
    return view('accounts');
});
Route::get('activity', function () {
    return view('activity');
});
Route::get('subscriptions', function () {
    return view('subscriptions');
});
Route::get('about', function () {
    return view('about');
});
Route::get('newhome', function () {
    return view('newhome');
});