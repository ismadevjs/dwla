<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;


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



Route::group(['prefix' => '/'], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('posts/activities/{id}', [FrontendController::class, 'posts'])->name('posts');
    Route::get('post/{id}', [FrontendController::class, 'post'])->name('post');
    Route::get('page/{id}', [FrontendController::class, 'page'])->name('page');
    Route::get('category/{id}', [FrontendController::class, 'blog'])->name('blog');
    Route::get('search', [FrontendController::class, 'search'])->name('search');
    Route::get('history', [FrontendController::class, 'history'])->name('history');
    Route::get('members/{cat}', [FrontendController::class, 'members'])->name('members');
    Route::get('lijan/{cat}', [FrontendController::class, 'lijan'])->name('lijan');
    Route::get('structures/{type}', [FrontendController::class, 'structures'])->name('structures');
    Route::get('news/{id}', [FrontendController::class, 'news'])->name('news');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
