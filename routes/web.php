<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/learn', [LearnController::class, 'index'])->name('learn.index');
Route::get('/learn/{slug}', [LearnController::class, 'show'])->name('learn.show');

Route::get('/comments/{id}/{type}', [CommentController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store']);

Route::group(['prefix' => 'bismillahirrahmanirrohim'], function () {
    Voyager::routes();
});
