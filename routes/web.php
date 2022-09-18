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

Route::get('/', [PostController::class, 'index']);

Route::get('/connexion', [PostController::class, 'inscription']);

Route::get('/show-post', [PostController::class, 'show'])->whereNumber('id');

Route::get('/inscription', [PostController::class, 'connexion']);

Route::get('/contact', [PostController::class, 'contact']);
