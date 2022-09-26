<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Authentification;

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

Route::get('/connexion', [Authentification::class, 'connexion'])->name('connexion');
Route::post('/connexion-utilisateur', [Authentification::class, 'loginUser'])->name('connexion-utilisateur');

Route::get('/show-post/{id}', [PostController::class, 'show'])->name('show.post');

Route::get('/inscription', [Authentification::class, 'inscription'])->name('inscription');
Route::post('/inscription-utlisateur', [Authentification::class, 'registerUser'])->name('inscription-utlisateur');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/utilisateurs', [PostController::class, 'users'])->name('utilisateurs')->middleware('isLoggedIn');


Route::get('/domaines', [PostController::class, 'domaines'])->name('domaines')->middleware('isLoggedIn');

Route::post('/domaines', [PostController::class, 'AddDomaine'])->name('AddDomaine');



Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/logout', [PostController::class, 'logout']);

Route::get('/testeurs',function(){
    return User::with('demandes')->find(10);
});

Auth::routes();


// pour le crud


//afficher
Route::get('/affiche/{id}', [PostController::class, 'afficher'])->name('afficher');

// modifier
Route::get('/edit-post/{id}', [PostController::class, 'editpost'])->name('post.edit');
Route::post('/update-post/{id}', [PostController::class, 'updatepost'])->name('update.post');

// suppression
Route::get('/delete-post/{id}', [PostController::class, 'deletepost']);

Route::get('/delete-user/{id}', [PostController::class, 'deleteuser']);



