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
Route::get('home',HomeController::class);
Route::get('1209/{url}',FariController::class);
Route::get('login',[UserAuthController::class, 'login']);
Route::get('register',[UserAuthController::class, 'register']);
Route::post('create',[UserAuthController::class, 'create'])->name('auth.create');
Route::post('check',[UserAuthController::class, 'check'])->name('auth.check');
Route::get('profile',[UserAuthController::class, 'profile']);
Route::get('logaut',[UserAuthController::class, 'logaut']);



