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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home', [App\Http\Controllers\PagesController::class, 'home'])->name('home.show');

// Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Route::resource('posts', App\Http\Controllers\PostsController::class);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
