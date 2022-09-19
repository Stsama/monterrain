<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');

Route::get('/connexion', [PostController::class, 'connexion'])->name('connexion');

Route::get('/show-post', [PostController::class, 'show'])->whereNumber('id');

Route::get('/inscription', [PostController::class, 'inscription'])->name('inscription');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');
