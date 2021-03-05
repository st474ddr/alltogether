<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
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

Route::get('/',  [GroupController::class, 'index'])->name('root');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('/group/create', GroupController::class)->except('get');
Route::get('/group/create', function (){
    return view('group.create');
});

//Route::get('/welcome', [\App\Http\Controllers\WelcomeController::class, 'about']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
