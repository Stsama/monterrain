<?php

use App\Models\User;
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

Route::get('/show-post/{id}', [PostController::class, 'show'])->name('show.post');

Route::get('/inscription', [PostController::class, 'inscription'])->name('inscription');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/vendeurs', [PostController::class, 'vendeurs'])->name('vendeurs');

Route::get('/acheteurs', [PostController::class, 'acheteurs'])->name('acheteurs');

Route::get('/domaines', [PostController::class, 'domaines'])->name('domaines');

Route::post('/domaines', [PostController::class, 'AddDomaine'])->name('AddDomaine');

Route::get('/posts', [PostController::class, 'posts'])->name('posts');

Route::get('/testeurs',function(){
    return User::with('demandes')->find(10);
});
