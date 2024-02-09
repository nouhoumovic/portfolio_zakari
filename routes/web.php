<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/all_articles', [UserController::class, 'all_articles'])->name('all_articles');
Route::get('/article/show/{id}', [UserController::class, 'get_article'])->name('get_article');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [UserController::class, 'deconnexion'])->name('deconnexion');
Route::middleware(['permission'])->group(function () {

Route::resource('user', UserController::class);

    Route::get('/compte', [UserController::class, 'compte'])->name('compte');
    Route::post('/password', [UserController::class, 'password'])->name('password');
    Route::get('/article/create/{id?}', [UserController::class, 'create'])->name('create');
    Route::get('/articles', [UserController::class, 'article'])->name('articles');
    Route::post('/article/store', [UserController::class, 'store'])->name('store');
    Route::get('/article/{id}', [UserController::class, 'article_show'])->name('article_show');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/logout', [UserController::class, 'deconnexion'])->name('logout');
    Route::post('/info', [UserController::class, 'info'])->name('info');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');



});


