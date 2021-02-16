<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FariController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\UserAuthController;

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
Route::get('login',[UserAuthController::class, 'login']);
Route::get('home',HomeController::class);
Route::get('1209/{url}',FariController::class);
Route::get('InputLogin','Auth\LoginController@ajaxRequest');
Route::post('InputLogin','Auth\LoginController@CheckUsername')->name('InputLogin.post');
Route::post('logged_in', [LoginController::class, 'login'])->name('login');
